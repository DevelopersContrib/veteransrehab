<?php include 'header.php'; ?>
    
                    <div class="arrw-rela"><div class="arrw-point-white"></div></div>
                    <div class="box-blck">
                    <div id="emailbox">
	                        <p>
	                            Learn more about Joining our Partner Network.
	                        </p>
	                        <form id="signupform" action="">
		                        <div class="form-group">
		                            <div class="input-group input-group-lg">
		                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" placeholder="your@email.com" required pattern = "^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+)*$"/>
		                                <input type="hidden" id="refid" value="0">
										<input type="hidden" id="domain" value="<?php echo $domain?>">
										<input type="hidden" id="user_ip" value="<?php echo $_SERVER['REMOTE_ADDR']?>">
		                                <span class="input-group-btn">
		                                    <a class="btn btn-danger btn-bg" id="btnsubmit">
		                                        <i class="fa fa-thumbs-up"></i>
		                                        Join Now!
		                                    </a>
		                                </span>
		                            </div>
		                        </div>
	                        </form>
	                        <div class="clear"></div>
							<div id="information" style="text-align:left !important;">
							</div>
					</div>
					<div id="social" class="text-center">
						<table style="border:0px;width:100%;">
							<tr>
								<td valign='top' style='width:15%;'>
									<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
									<script type="IN/Share" data-url="http://www.linked.com"></script>
								</td>
								<td valign='top' style='width:85%;'>

									<!-- AddThis Button BEGIN -->
									<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
										<a class="addthis_button_preferred_1"></a>
										<a class="addthis_button_preferred_2"></a>
										<a class="addthis_button_preferred_3"></a>
										<a class="addthis_button_preferred_4"></a>
										<a class="addthis_button_compact"></a>
										<a class="addthis_counter addthis_bubble_style"></a>
									</div>
									<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
									<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-517895f814f07260"></script>
									<!-- AddThis Button END -->
								</td>    
							</tr>
						</table>
					</div>
					<div class="pages hidden" id="pagesubmit">
						
						
						<div id="response_wait"><div class="span12" style="width:100%;text-align:center;margin:20px 0 35px 0;color:white;min-height:20px;font-size:18px;" id="loading">Processing . . . Please wait . . .</div></div>
						<div class="row-fluid" id="response" style="margin-top: 20px;color: rgb(12, 179, 32);text-shadow: 1px 1px 1px black;display:none">
							
							<div class="span12 text-center"><h3>Thanks, your spot is reserved!</h3> Share <?php echo ucfirst($domain)?> with you friends to move up in line and reserve your username.
								<div class="addhtml">
								<?if($additional_html != ""):?>
								<?echo base64_decode($additional_html)?>
								<?endif;?>
								</div>
								<form target="_blank" action="http://www.contrib.com/signup/follow/<?php echo ucfirst($domain)?>" method="post">
									<input type="hidden" id="pemail" name="email" value=""/>
									<button class="btn btn-warning">Continue to Follow <?php echo ucfirst($domain)?> Brand</button></form><br><br>
								</div>
								
								
							</div><!-- response -->
							
							
							
							<div id="description">
								<h3 id="header_text"></h3>
								<p id="paragraph_text"></p>
								<p>To share with your friends, click &ldquo;Share&rdquo; and &ldquo;Tweet&rdquo;:</p>
								<a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
								<br><br>
								<p> <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.socialholdings.com%2F&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
								</p>
								<div id="sharebuttons"><span id="facebook" style="margin:0 0 10px 60px"></span><span id="twitter"></span></div>
							</div>
				<!--<p class="clear" style="text-align: left;">Or copy and paste the following link to share wherever you want!</p>
							<input id="shareurl" type="text" value="" />
						-->
						<!-- <a class="cs_import">Email To Friends</a>-->

					</div>	
						
						
                    </div>
                </div>
            
        
    
    
    <script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$('#email').click(function(){
			$(this).attr("placeholder","");
		});
		
		$('#pagesubmit').hide();
		$('#pagesubmit').removeClass('hidden');
		$('#btnsubmit').click(function(){
			$('#signupform').submit();
		});
		$('#signupform').submit(function(){
			
			var email = $('#email').val();
			var user_ip = $('#user_ip').val();
			var indexof = email.indexOf("@");
			var name = email.slice(0,indexof);
			var domain = $('#domain').val(); 
			
			
			if(email==''){
				alert('Email is Required.');
				$('#email').focus();
				return false;
			}else if(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(email)==false){
				alert('Please enter a valid email address.');
				$('#email').focus();
				return false;
			}else{
				
				$("#signupform").hide();	
				$('#response_wait').show();
				$("#pagesubmit").slideDown('normal');
				
			//DOMAINDI LEADS		
			jQuery.ajax({
				type: "post",url: "http://www.contrib.com/forms/saveleads",
				data: {'email':email, 'domain':domain,'user_ip':user_ip},
				success: function(res){
					$('#response_wait').hide();
					console.log(res);
					
					$("#loading").hide();
					
					if(res.success=='false'){
						$('#response').append('<div class="span12 text-center" id="response">Something went wrong. Sorry for the inconvenience.</div>');
					}else if(res.success=='success'){
						
						
						$('#pemail').val(email);
						$('#response').css('display','block');
						
					}else{
						$('#response').append('<div class="span12 text-center" id="response">'+res.success+'<br><br>Visit our <a href="http://www.contrib.com/brand/details/'+domain+'" target="_blank">'+domain.toUpperCase()+' brand page</a> for further details. <br><br>Thank you! <br><br></div>');
					}
					
				}});	
			
				// SALESFORCE LEAD
				$.post("http://www.manage.vnoc.com/salesforce/addlead",
				{
					'firstName':name,
					'lastName':name,
					'title':'',
					'email':email,
					'phone':'',
					'street':'',
					'city':'',
					'country':'',
					'state':'',
					'zip':'',
					'domain':domain,
					'form_type':'Contrib Lead Template'
					
				},function(data2){
					console.log(data2);
				}
				);
				
				
				return false;
				
			}
			
			return false;

		});

});

</script>
    <?php include_once 'footer.php';?>