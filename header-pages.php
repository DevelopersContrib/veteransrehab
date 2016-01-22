<?php include('includes/config.php');?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
	<meta charset="utf-8">
        	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<link rel="canonical" href="http://<?=$domain?>" />
	<meta name="robots" content="index, follow" />
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

	
        <meta name="author" content="<?=$domain?> ">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation --> 
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap --> 
        <link rel="stylesheet" href="css/bootstrap.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <!-- revolution slider -->
        <link rel="stylesheet" href="css/extralayers.css" />
        <link rel="stylesheet" href="css/settings.css" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <link rel="stylesheet" href="css/owl.transitions.css" />
        <link rel="stylesheet" href="css/full-slider.css" />
        <!-- text animation -->
        <link rel="stylesheet" href="css/text-effect.css" />
        <!-- common -->
		  <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-ver2.css" />
        <!-- responsive -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <link rel="stylesheet" href="css/style-ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
		<style>
		.logo {max-width:250px;}
		</style>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="/js/jquery.counter-analog.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/js/jquery.counter-analog2.css" media="screen" rel="stylesheet" type="text/css" />
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
	<style>
	/*footer */
/* Dark Footer */
			.footer-dark-1,.footer-dark-2{
				line-height: 20px;
			}
			.footer-dark-1 .text-g1,.footer-dark-2 .text-g1{
				color: #ccc;
			}
			.footer-dark-1 .f-a-links a,.footer-dark-2 .f-a-links a{
				color: #ccc;
			}
			.footer-dark-1 .f-a-links a:hover, .footer-dark-2 .f-a-links a:hover{
				color: #e1e1e1;
				text-decoration: none;
			}
			.footer-dark-1{
				color: #fff;
				padding: 25px 0 10px;
				background-color: #333;
			}
			.footer-dark-1 h3{
				margin-top: 0;
			}
			.fnt-bold{
				font-weight: bold;
			}
			.footer-dark-2{
				color: #fff;
				padding: 25px 0;
				background-color: #222;
			}
			.footer-dark-2 ul.list-inline{
				margin-bottom: 0;
			}
			.socials-ul li{
				padding-right: 0;
				padding-left: 0;
			}
/* Black B */
			.footer-dark-1.footer-dark-b-1{
				background-color: #020202;
			}
			.footer-dark-2.footer-dark-b-2{
				background-color: #0e0e0e;
			}


			/* For Social Media Style Brand Details */
			/* Wrapper */
			.icon-button {
				border-radius: 0.6rem;
				cursor: pointer;
				display: inline-block;
				font-size: 2.0rem;
				height: 3rem;
				line-height: 3rem;
				position: relative;
				text-align: center;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				width: 3rem;
			}

			/* Circle */
			.icon-button span {
				border-radius: 0;
				display: block;
				height: 0;
				left: 50%;
				margin: 0;
				position: absolute;
				top: 50%;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				-o-transition: all 0.3s;
				transition: all 0.3s;
				width: 0;
			}
			.icon-button span {
				width: 3rem;
				height: 3rem;
				border-radius: 0.6rem;
				margin: -1.5rem;
			}
			.twitter span {
				background-color: #4099ff;
			}
			.facebook span {
				background-color: #3B5998;
			}
			.google-plus span {
				background-color: #dd4b39;
			}
			.youtube span {
				background-color: #bb0000;
			}
			.pinterest span {
				background-color: #cb2027;
			}
			.angellist span {
				background-color: #000;
			}
			.github span {
				background-color: #000;
			}
			.linkedin span {
				background-color: #007bb6 ;
			}
			.tumblr span {
				background-color: #36465d ;
			}
			.foursquare span {
				background-color: #0072b1 ;
			}

			/* Icons */
			.icon-button i {
				background: none;
				color: white;
				height: 3rem;
				left: 0;
				line-height: 3rem;
				position: absolute;
				top: 0;
				width: 3rem;
				z-index: 10;
			}
			/* For Image iCons */
			.social-img-icon-a{
				border-radius: 0.6rem;
				display: block;
				height: 30px;
				overflow: hidden;
				width: 30px;
			}
			.social-img-icon-a img{
				height: 30px;
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
                //reach:30
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

	