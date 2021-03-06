<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title>JMaghreb 2014</title>
		<meta name="description" content="JMaghreb 2014">
		<meta name="author" content="MoroccoJUG">
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- CSS
		================================================== -->
		<!-- Bootstrap  -->
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- web font  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
		<!-- plugin css  -->
		<link rel="stylesheet" type="text/css" href="js-plugin/animation-framework/animate.css" />
		<link rel="stylesheet" type="text/css" href="js-plugin/magnific-popup/magnific-popup.css" />
		<link type="text/css" rel="stylesheet" href="js-plugin/isotope/css/style.css">
		<link rel="stylesheet" type="text/css" href="js-plugin/flexslider/flexslider.css" />
		<link rel="stylesheet" type="text/css" href="js-plugin/pageSlide/jquery.pageslide.css" />
		<!-- Owl carousel-->
		<link rel="stylesheet" href="js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="js-plugin/owl.carousel/owl-carousel/owl.theme.css">
		<!-- icon fonts -->
		<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
		<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">
		<!-- Custom css -->
		<link type="text/css" rel="stylesheet" href="css/layout.css">
		<link type="text/css" id="colors" rel="stylesheet" href="css/blue.css">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<script src="js/modernizr-2.6.1.min.js"></script>
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	</head>
	<body data-spy="scroll" data-target="#scrollTarget" data-offset="150" iclass="activateAppearAnimation">
		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<img src="images/theme-pics/loader.gif?v_res_jmeagh=0.1" alt=""/><h1 class="noSubtitle">JMaghreb 3.0 Speakers</h1>
			</div>
		</div>
		<!-- Preloader -->
		<!-- Primary Page Layout 
		================================================== -->
		<!-- globalWrapper -->
		<div id="globalWrapper" class="localscroll">
			<!-- header -->
			<header id="mainHeader" class="navbar-fixed-top" role="banner">
				<div class="container">
					<nav class="navbar navbar-default scrollMenu" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<a class="navbar-brand" href="index-fullscreen.html" style="padding-top:20px;"><img src="images/main-logo.png?v_res_jmeagh=0.1" alt="Ashley website template" style="height:50px;"></a> </div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="scrollTarget">
								<ul class="nav navbar-nav pull-right">
									<li class="active"><a href="./" target="blank"> <i class="icon-home-outline"></i>Home</a> </li>
									<li><a href="index.php#about" target="blank"><i class="icon-star"></i>About</a> </li>
									<li><a href="index.php#program" target="blank"><i class="icon-thumbs-up"></i>Program</a> </li>
									<li><a href="index.php#team" target="blank"><i class="icon-popup-1"></i>JMaghrebians</a> </li>
									<li><a href="#speakers"><i class="icon-mic-outline"></i>Speakers</a> </li>
									<li><a href="index.php#sponsors" target="blank"><i class="icon-users"></i>Sponsors</a> </li>
									<li><a href="#contactSlice"><i class="icon-mail"></i>Contact</a> </li>
                                    <li><a href="http://www.jmaghreb.io/fr" target="blank"><i class="icon-arrows-cw-outline"></i>Français</a> </li>
								</ul>
							</div>

						</nav>
					</div>
				</header>
				<!-- header -->
				






				
			
				<section class="slice" id="speakers">
					<div class="container clearfix">
						<div class="row">
							<div class="col-sm-12">
								<h1>Speakers</h1>
								<h2 class="subTitle">JMaghreb 3.0 Speakers</h2>
							</div>
							<nav id="filter" class="col-md-12 text-center">
								<ul>
									<li><a href="" class="current btn btn-sm" data-filter=".team">All</a></li>
									<li><a href=""  class="btn btn-sm" data-filter=".1" >Java SE & JVM languages</a></li>
									<li ><a href="" class="btn btn-sm" data-filter=".5">Java EE</a></li>
                                    <li><a href=""  class="btn btn-sm" data-filter=".3">Methodology, Agile & DevOps</a></li>
                                    <li><a href=""  class="btn btn-sm" data-filter=".2">Mobile, Web & HTML5</a></li>
                                    <li><a href=""  class="btn btn-sm" data-filter=".6">Architecture & Security</a></li>
                                    <li><a href=""  class="btn btn-sm" data-filter=".7">JMaghreb.Next()</a></li>
								</ul>
							</nav>

							<div class="portfolio-items row isotopeWrapper clearfix imgHover" id="3">
								
                                <?php 

		$details_url='http://cfp.jmaghreb.io/acceptedSpeakers';
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $details_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$jsonData = json_decode(curl_exec($ch), true);
		$speakers = $jsonData['speakers'];
		
foreach($speakers as $speaker){
  $talks=$speaker['talks'];
  $tracks="";
  
  foreach ($talks as $talk){
  $track=$talk['track']['value'];
  if($track== '4' || $track== '7') $track= "7" ;
  $tracks=$tracks." ".$track;
  }

			?>			
				<article class="col-sm-3 isotopeItem team <?php echo $tracks ; ?>">
									<section class="imgWrapper_"> 
										<img alt="" src="<?php echo $speaker['image'] ; ?>?v_res_jmeagh=0.1" class="img-responsive"> 
									</section>
									<div class="mediaHover">
										<div class="mask"></div>
										<div class="iconLinks">
										
                                        </div>
										</div>
										<section class="boxContent" style="text-align:center;background-color:#F7F7F7;padding: 5px;margin-top:0px;">
											<h3 class="lname"><?php echo $speaker['fname']." ".$speaker['lname']; ?></h3>
											
                                            <ul class="socialNetwork ">
												<li>
                                                    <a href="#<?php echo $speaker['_id']['$oid']; ?>" title="Bio" class="tips open-popup-link" target="linkin">
												        <i class="icon-user iconRounded "></i>
												    </a> 
													<div id="<?php echo $speaker['_id']['$oid'] ; ?>" class="white-popup mfp-hide">
<div class="img">
													<img alt="" src="<?php echo $speaker['image'] ; ?>" class="logoImg img-circle"> <h3 class="lname" style="text-align:center;"><?php echo $speaker['fname']." ".$speaker['lname'] ; ?>
 </div>
 <div class="bio"><?php echo $speaker['bio'] ; ?></div>
 
 
</div>

                                                </li>
												<?php if ( isset( $speaker['twitter'] )) { ?>
                                                <li>
                                                    <a href="https://twitter.com/<?php echo $speaker['twitter'] ; ?>" title="Twitter" class="tips" target="twit">
                                                        <i class="icon-twitter-bird iconRounded "></i>
                                                    </a>
                                                </li>
												<?php ;}?>
												
												<li>
                                                    <a href="#talk_<?php echo $speaker['_id']['$oid']; ?>" title="Talks (<?php echo count($talks) ; ?>)" class="tips open-popup-link" target="linkin"  href="#test-modal">
												        <i class="icon-chat iconRounded "></i>
												    </a> 
													<div id="talk_<?php echo $speaker['_id']['$oid'] ; ?>" class="white-popup mfp-hide">

													<?php 
  $talks=$speaker['talks'];
 foreach ($talks as $talk){
  ?>
  <br>
  
  <h2 class="lname"> <?php echo $talk['title']; ?></h2> 
 <div class="info">   <?php echo "<b>Track</b>: <label class='talk'>".$talk['track']['label']."</label> - "."<b>Type</b>: <label class='talk'>".$talk['type']['label']."</label> - "."<b>Language</b>: <label class='talk'>".$talk['language']['label']; ?><label></div>
  
  <div class="talk"><?php echo $talk['abstract']; ?></div>
  
  <hr>
  <?php ;}?>
</div>
								        </ul>
                                    
										</section>
									</article>
                      
								<?php
								;}
?>
								</div>
							</div>
						</div>
					</section>

					
					<section class="slice"  id="contactSlice" >
						<div class="container">
							<div class="row">

								<div class="col-sm-12">
									<h1 class="noSubtitle">Contact us</h1>
								</div>
								
								<div class="col-sm-12">
									
									<address>
										For any question or partnership, you can contact the JMaghreb team at: <a href="mailto:info@jmaghreb.io">info@jmaghreb.io</a>
									</address>
									
								</div>
								
							</div>
						</div>
					</section>
					
					
					<!-- content -->
					<!-- footer -->
					<footer class="color4">
						<section id="mainFooter">
							<div class="container" id="footer">
								<div class="row">
									<div class="col-sm-4">
										<div class="footerWidget">
											
										</div>
									</div>


									<div class="col-sm-4">
										<div class="footerWidget">
											
										</div>
									</div>

									<div class="col-sm-4">
										<div class="footerWidget">
											<h3>We're social</h3>
											<ul class="socialNetwork pull-right">
												<li><a href="https://www.facebook.com/JMaghrebConf" target="_blank" class="tips" title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
												<li><a href="https://twitter.com/JMaghrebConf" target="_blank" class="tips" title="follow me on Twitter" target="_blank"><i class="icon-twitter-bird iconRounded"></i></a></li>
												<li><a href="https://plus.google.com/107325370922477078379/" target="_blank" class="tips" title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
												<li><a href="http://www.linkedin.com/groups/JMaghreb-7486767?home=&gid=7486767&trk=anet_ug_hm" target="_blank" class="tips" title="follow me on Linkedin">
												<li><a href="http://instagram.com/jmaghreb" target="_blank" class="tips" title="follow me on Instagram"><i class="icon-camera iconRounded"></i></a></li>
												<li><a href="https://www.youtube.com/user/JMaghreb" target="_blank" class="tips" title="follow me on Youtube"><i class="icon-youtube iconRounded"></i></a></li>
												<li><a href="https://www.flickr.com/photos/121912191@N02/" target="_blank" class="tips" title="follow me on Flickr"><i class="icon-flickr iconRounded"></i></a></li>
											</ul>   
											
										</div>
									</div>

								</div>
							</div>
						</section>
					</footer>
					<section  id="footerRights">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-center">
									<p>Copyright © 2014 <a href="http://www.jmaghreb.io" target="blank">JMaghreb</a> / All rights reserved.</p>
								</div>

							</div>
						</div>
					</section>
					<!-- End footer -->
				</div>
				<!-- global wrapper -->
		<!-- End Document 
		================================================== -->
		<script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
		<script type="text/javascript" src="js-plugin/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
		<!-- third party plugins  -->
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js-plugin/easing/jquery.easing.1.3.js"></script>

		<script type="text/javascript" src="js-plugin/flexslider/jquery.flexslider-min.js"></script>

		<script type="text/javascript" src="js-plugin/isotope/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
		<script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script type="text/javascript" src="js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js"></script>
		<script type="text/javascript" src="js-plugin/parallax/js/jquery.stellar.min.js"></script>
		<!-- <script type="text/javascript" src="js-plugin/smoothscroll/SmoothScroll.js"></script> -->
		<script type="text/javascript" src="js-plugin/pageSlide/jquery.pageslide-custom.js"></script>
		<script type="text/javascript" src="js-plugin/jquery.sharrre-1.3.4/jquery.sharrre-1.3.4.min.js"></script>

		<script type="text/javascript" src="js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="js-plugin/magnific-popup/jquery.magnific-popup.js" />

		<!-- Custom  -->
		<script type="text/javascript" src="js/custom.js?v_jmeagh=0.2"></script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50390260-1', 'jmaghreb.io');
  ga('send', 'pageview');

 $('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});
</script>
	</body>
	</html>
