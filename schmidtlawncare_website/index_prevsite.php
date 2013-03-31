<?php
if ($_SERVER["HTTP_HOST"]=="www.wheatonmulch.org" || $_SERVER["HTTP_HOST"]=="wheatonmulch.org") {
	Header( "HTTP/1.1 301 Moved Permanently" );
	Header( "Location: http://www.wheatonmulch.com" );
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
	<head>
		<title>Schmidt Lawncare Inc.</title>
		<meta name="google-site-verification" content="tL19fXc1YJS9fEOEtPki0EdDaX_bitYY-nP79lHKCBQ" />
		<meta name="google-site-verification" content="tL19fXc1YJS9fEOEtPki0EdDaX_bitYY-nP79lHKCBQ" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<meta name="author" content="Robert Stevenson">
		<meta content="text/html; charset=us-ascii"
			  http-equiv="Content-Type" />
		<meta name="description" content="Schmidt Lawncare Inc. providing professional landscape and lawn maintenace to the Dupage county area since 1996." />
		<meta name="keywords" content="lawncare,aerating,mulch,spring cleanup,fall cleanup,dethatch,grading,leveling" />
		<meta name="Googlebot" content="index,follow" />
		<meta name="Robots" content="index,follow" />
		<link type="text/css" rel="stylesheet"
			  href="css/primary.css" />
		<script type="text/javascript" src="http://cdn.jquerytools.org/1.1.2/jquery.tools.min.js"></script>
		<!-- <script type="text/javascript" src="http://static.flowplayer.org/js/tools/1.1.2/all/jquery.tools.min.js?v=1"></script> -->
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->

				<!-- <script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script> -->
		<!-- <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>  -->
		<script type="text/javascript" src="scripts/jquery.galleryview-1.1.js"></script>
		<script type="text/javascript" src="scripts/jquery.timers-1.1.2.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#slideshow_id').galleryView({
					panel_width: 410,
					panel_height: 308,
					transition_speed: 1500,
					transition_interval: 5000,
					nav_theme: 'dark',
					border: '1px solid black',
					pause_on_hover: true
				});
				$(".galleryview .panel img").show();
				$(".galleryview").show();
			});
		</script>
	</head>

	<body id="normalbody">
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-13038180-2']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
			})();

		</script>
		<div id="page_wrapper">

			<div class="main" >
				<style  TYPE="text/css">
					.user-area ul a {
						color:black;
					}
					}
				</style>
				<?php include 'pageheader.php' ?>


				<?php include 'slideshow.php' ?>
				<div class="hometext" style="color:black;">
			Schmidt Lawncare Inc. strives to provide quality and professional service to
			exceed the <a href="testimonial.php">customer's expectations</a>. Our unmatched attention to detail
			enables us to meet the needs of every customer.
				</div>
				<?php include 'homeleftmenu.php'?>

				<div class="truck">
					<img src="/images/slc_trucktrailer.jpg"/>
				</div>
				<div class="hometext_continued" style="color:black;background-image: url(/images/green30pct.png);">
					Our Professional staff is committed to an honest approach, reliable
					and quality service, and a concern for exceeding the client's wants
					and needs.  Our dedication to a job done right and our professional
					image is what <a href="whydifferent.php">sets us apart</a>.
				</div>

				<div class="weather_quicklinks_container" >
					<a href="http://www.wheatonmulch.com" style="border:0px;" target="_blank" class="wheatonmulch">
						<img src="/images/Wheaton%20Mulch.jpg" border="1" style=""/>
					</a>

					<div class="quicklinks_right" >
						<div class="quickLinkSection" >
							<div class="quickLinkHead">Quick Links</div>

							<div><a href="news.php">News</a></div>
							<div><a href="testimonial.php">Customer Testimonials</a></div>
						</div>
						<div class="weather" >
							<div id="wx_module_7055">
								<a href="http://www.weather.com/weather/local/USIL1259">Wheaton Weather Forecast, IL</a>
							</div>
							<script type="text/javascript">

								/* Locations can be edited manually by updating 'wx_locID' below.  Please also update */
								/* the location name and link in the above div (wx_module) to reflect any changes made. */
								var wx_locID = 'USIL1259';

								/* If you are editing locations manually and are adding multiple modules to one page, each */
								/* module must have a unique div id.  Please append a unique # to the div above, as well */
								/* as the one referenced just below.  If you use the builder to create individual modules  */
								/* you will not need to edit these parameters. */
								var wx_targetDiv = 'wx_module_7055';

								/* Please do not change the configuration value [wx_config] manually - your module */
								/* will no longer function if you do.  If at any time you wish to modify this */
								/* configuration please use the graphical configuration tool found at */
								/* https://registration.weather.com/ursa/wow/step2 */
								var wx_config='SZ=180x150*WX=FHW*LNK=SSNL*UNT=F*BGI=seasonal1*MAP=CSC|null*DN=schmidtlawncareinc.com*TIER=0*PID=1164963383*MD5=068fc1d54ee386badd633f1b617e0e84';

								document.write('<scr'+'ipt src="'+document.location.protocol+'//wow.weather.com/weather/wow/module/'+wx_locID+'?config='+wx_config+'&proto='+document.location.protocol+'&target='+wx_targetDiv+'"></scr'+'ipt>');
							</script>
						</div>
					</div>
				</div>
				<div class="dummy" style="width:100%;height: 2px;">&nbsp;</div>


				<div class="address" >
					709 Childs Street • Wheaton, IL 60187 • Phone 630.653.1331 • Fax 630.653.1661
				</div>

			</div>
		</div>
	</body>
</html>

