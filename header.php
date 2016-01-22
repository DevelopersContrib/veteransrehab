<?php include('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/icon" href="favicon.ico">
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<link rel="canonical" href="http://<?=$domain?>" />
	<meta name="robots" content="index, follow" />
	<title><?=$title?></title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="title" content="<?=$domain?> " />
	<meta name="description" content="<?=$domain?> <?=$description?>" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="/js/jquery.counter-analog.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/js/jquery.counter-analog2.css" media="screen" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/js/pulsate.js"></script>
    <style>
        .brdr{
            border:1px solid;
        }

<?php if($background_image != ""){ ?>
	.section-1 {background: url(<?php echo $background_image?>);
	<?php }?>
	#social {
    margin-left: auto;
    margin-right: auto;
    width: 340px;
}
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            function setHeight() {
                windowHeight = $(window).innerHeight();
                $('.section-1').css('min-height', windowHeight);
            };
            setHeight();

            $(window).resize(function() {
                setHeight();
            });
            //$(".btn-bg").pulsate({
              //  glow:false,
               // reach:30
            //});
        });
    </script>
    
    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?=$account_ga?>']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.stats.numberchallenge.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', <?=$piwik_id?>]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.stats.numberchallenge.com/piwik.php?idsite=<?=$piwik_id?>" style="border:0;" alt="" /></p></noscript>
</head>
<body>
<? if($forsale=='1' || $forsaledefault=='1'){ ?>
    <div class="domain-green">
        <?=$forsaletext?> <a style="color:blue;" target="_blank" href="http://domaindirectory.com/servicepage/?domain=<?echo $domain?>">Inquire now</a>.
    </div>
  <?php }?>  
    <div style="position:relative;">
        <div class="animated rotateIn r-d">
            <a alt="Contrib" target="_blank" href="<?=$domain_affiliate_link;?>">
                <img src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/badge-contrib-3.png">
            </a>
        </div>
    </div>
    
    <div class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h1 class="text-capitalize logo-text text-shad1">
                    <? if($logo == "" || empty($logo) || $logo == "_"): ?>
                         <?php echo $domain?>
                        <?php else:?>
                         <img src="<?php echo $logo?>" class="img-responsive">
                     <?php endif?>   
                    </h1>
                    <h3 class="text-shad1 max-wd">
                        <?
	                      if(str_replace(' ','',$description)!='') echo stripslashes($description);
                         ?> 
     
                    </h3>