<?php

function createApiCall($url, $method, $headers, $data = array(),$user=null,$pass=null)
{
        if (($method == 'PUT') || ($method=='DELETE'))
        {
            $headers[] = 'X-HTTP-Method-Override: '.$method;
        }

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        if ($user){
         curl_setopt($handle, CURLOPT_USERPWD, $user.':'.$pass);
        } 

        switch($method)
        {
            case 'GET':
                break;
            case 'POST':
                curl_setopt($handle, CURLOPT_POST, true);
                curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($data));
                break;
            case 'PUT':
                curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($data));
                break;
            case 'DELETE':
                curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
        }
        $response = curl_exec($handle);
        return $response;
}

$api_url = "http://api1.contrib.co/request/";
    $headers = array('Accept: application/json');
    $domain = $_SERVER["HTTP_HOST"]."".$_SERVER['REQUEST_URI'];//input sitename without www
    $key = md5('vnoc.com');

if (!file_exists('./includes/config-framework.php')) {
    $file = file_get_contents('./includes/config-template.php');
    $api_url = "http://api1.contrib.co/request/";
    $headers = array('Accept: application/json');
    $domain = $_SERVER["HTTP_HOST"]."".$_SERVER['REQUEST_URI'];//input sitename without www
    $error = 0;
    
    if(stristr($domain,'~') ===FALSE) {
    	$domain = $_SERVER["HTTP_HOST"];
      $domain = str_replace("http://","",$domain);
    	$domain = str_replace("www.","",$domain);
    	$key = md5($domain);
    }else {
       $key = md5('vnoc.com');
       $d = explode('~',$domain);
       $user = str_replace('/','',$d[1]);
       
       $url = $api_url.'getdomainbyusername?username='.$user.'&key='.$key;
       $result =  createApiCall($url, 'GET', $headers, array());
       $data_domain = json_decode($result,true);
       $domain =   $data_domain['data']['domain'];
       
    }
    
    $url = $api_url.'getdomaininfo?domain='.$domain.'&key='.$key;
    $result = createApiCall($url, 'GET', $headers, array());
    $data_domain = json_decode($result,true);
    
    if ($data_domain['success']){
    	$domainid = $data_domain['data']['DomainId'];
    	$domainname = $data_domain['data']['DomainName'];
    	$memberid = $data_domain['data']['MemberId'];
    	$title = $data_domain['data']['Title'];
    	$logo = $data_domain['data']['Logo'];
    	$description = $data_domain['data']['Description'];
    	$account_ga = $data_domain['data']['AccountGA'];
    	$description = stripslashes(str_replace('\n','<br>',$description));
    	
      $url2 = $api_url.'getdomainattributes?domain='.$domain.'&key='.$key;
      $result2 = createApiCall($url2, 'GET', $headers, array());
    	$data_domain2 = json_decode($result2,true);
    	
      if($data_domain2['success']){
    		$background_image = $data_domain2['data']['background_image_url'];
    		$fb_page = $data_domain2['data']['fb_page'];
			$twitter = $data_domain2['data']['twitter_page'];
			$bottom_text = $data_domain2['data']['bottom_text'];
	    	$forsale = $data_domain2['data']['show_for_sale_banner'];
	    	$forsaledefault = $data_domain2['data']['show_for_sale_banner_DefaultValue'];
	    	$forsaletext = $data_domain2['data']['for_sale_text'];
	    	$additional_html = $data_domain2['data']['additional_html'];
    		if($forsaletext=='') $forsaletext = 'This domain belongs to the Global Ventures network. We have interesting opportunities for work, sponsors and partnerships.';
    		
      $url3 = $api_url.'GetPiwikId?domain='.$domain.'&key='.$key;
      $result3 = createApiCall($url3, 'GET', $headers, array());
    	$data_domain3 = json_decode($result3,true);
      $piwik_id = $data_domain3['data']['idsite'];
        
       //get related domains
    	$url = $api_url.'getrelateddomains?domain='.$domain.'&limit=10';
      $result = createApiCall($url, 'GET', $headers, array());
      $data_domains = json_decode($result,true);
    	if ($data_domains['success']){
    		$related_domains = $data_domains['data'];
    	}
	 
      //get fund campaigns
      $url = $api_url.'getfundcampaigns';
		  $result = createApiCall($url, 'GET', $headers, array()); 
      $items = json_decode($result,true);
	  if ($items['success']){
    		$campaigns = $items['data'];
    	}
	  
      /*$campaigns = array();
		
    	$post_name = '';
    	$post_title = '';
    	$permalink = '';
    	$campaign_goal = '';
    	$campaign_location = '';
    	$campaign_author = '';
    	$campaign_type = '';
    	$campaign_updates = '';
    		
      if (isset($items['campaign'])){  
      	foreach($items['campaign'] as $item){
      			$meta = $item['meta'];
      			$campaign_goal = $meta['campaign_goal'];
      			$campaign_location = $meta['campaign_location'];
      			$campaign_author = $meta['campaign_author'];
      			$campaign_type = $meta['campaign_type'];
      			
      			$post_title = $item['post_title'];
      			$permalink = $item['permalink'];
      			$post_status = $item['post_status'];
      			$post_name = $item['post_name'];
      			$campaigns[] = array(
      				$post_title,				
      				$campaign_goal,
      				$campaign_location,
      				$campaign_author,
      				$campaign_type,
      				$permalink,
      				$post_name
      			);
      		}
      }*/
    		
        
    	}else{
    		$error++;
    	}
    			
    }else {
    	$error++;
    }
    
    
    //get monetize ads from vnoc
    $url = $api_url.'getbannercode?d='.$domain.'&p=footer';
    $result = createApiCall($url, 'GET', $headers, array());
    $data_ads = json_decode($result,true);
    $footer_banner = html_entity_decode(base64_decode($data_ads['data']['content']));
    
    //get domain affiliate id
    $url = $api_url.'getdomainaffiliateid?domain='.$domain.'&key='.$key;
    $result = createApiCall($url, 'GET', $headers, array());
    $data_domain_affiliate = json_decode($result,true);
    if ($data_domain_affiliate['success']){
    	$domain_affiliate_id = $data_domain_affiliate['data']['affiliate_id'];
    }else {
    	$domain_affiliate_id = '391'; //contrib.com affiliate id
    }
    $domain_affiliate_link = 'http://referrals.contrib.com/idevaffiliate.php?id='.$domain_affiliate_id.'&url=http://www.contrib.com/signup/firststep?domain='.$domain;
    
    
    //partners 
	$url = $api_url.'getpartners?domain='.$domain.'&key='.$key.'&final=1';
	$result = createApiCall($url, 'GET', $headers, array());
	$partners_result = json_decode($result,true);
	$partners = array();  
	if ($partners_result['success']){
			$approved_partner = $partners_result['data'];
	}else {
		$approved_partner = array();
	}		
    
  
  //create file
  $file = str_replace('{{DOMAIN}}',$domain , $file);
  $file = str_replace('{{DOMAIN_ID}}',$domainid , $file);
  $file = str_replace('{{MEMBER_ID}}',$memberid, $file);
  $file = str_replace('{{TITLE}}',$title, $file);
  $file = str_replace('{{LOGO}}',$logo, $file);
  $file = str_replace('{{DESCRIPTION}}',$description, $file);
  $file = str_replace('{{ACCOUNT_GA}}',$account_ga, $file);
  $file = str_replace('{{BACKGROUND_IMAGE}}',$background_image, $file);
  $file = str_replace('{{FB_PAGE}}',$fb_page, $file);
  $file = str_replace('{{TWITTER}}',$twitter, $file);
  $file = str_replace('{{BOTTOM_TEXT}}',$bottom_text, $file);
  
  $file = str_replace('{{SHOW_FOR_SALE}}',$forsale, $file);
  $file = str_replace('{{SHOW_FOR_SALE_DEFAULT}}',$forsaledefault, $file);
  $file = str_replace('{{FOR_SALE_TEXT}}',$forsaletext, $file);
  $file = str_replace('{{FOOTER_BANNER}}',$footer_banner, $file);
  $file = str_replace('{{ADDITIONAL_HTML}}',$additional_html, $file);
  $file = str_replace('{{AFF_LINK}}',$domain_affiliate_link, $file);
  $file = str_replace('{{AFF_ID}}',$domain_affiliate_id, $file);
  $file = str_replace('{{PIWIK_ID}}',$piwik_id, $file);
  $file = str_replace('{{RELATED_DOMAINS}}',var_export($related_domains, true), $file);
  $file = str_replace('{{FUND_CAMPAIGNS}}',var_export($campaigns, true), $file);
  $file = str_replace('{{PARTNERS}}',var_export($approved_partner, true), $file);
  
  file_put_contents('./includes/config-framework.php', $file);
}

	include "./includes/config-framework.php";
  
	
	
  
	//get number of leads for counter
    $url = $api_url.'getdomainleadscount?domain='.$domain.'&key='.$key;
    $result = createApiCall($url, 'GET', $headers, array());
    $data_follow_count = json_decode($result,true);
    if ($data_follow_count['success']){
    	$follow_count = ($data_follow_count['data']['leads'] + 1 ) * 25;
    }else {
    	$follow_count = 1 * 25;
    }
	

/**
	generate robots.txt if not exist
**/
$filename = '/robots.txt';
if(!(file_exists($filename))) {
    $my_file = 'robots.txt';
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = '---BEGIN ROBOTS.TXT ---
User-Agent: *
Disallow:

Sitemap: http://'.$domain.'/sitemap.html
--- END ROBOTS.TXT ----';
	fwrite($handle, $data);
}




$__page = $_SERVER['PHP_SELF'];

if($__page =='/about.php')
	$title = 'About '.ucwords($domain);
else if($__page =='/terms.php')
	$title = ucwords($domain).' - Terms of Use';
else if($__page =='/privacy.php')
	$title = ucwords($domain).' - Privacy & Policy';
else if($__page =='/contact.php')
	$title = ucwords($domain).' - Contact Us';
else if($__page =='/staffing.php')
	$title = ucwords($domain).' - We are Hiring!';
else if($__page =='/referral.php')
	$title = ucwords($domain).' - Get Banners And Make Money';

?>