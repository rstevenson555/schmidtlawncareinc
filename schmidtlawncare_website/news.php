<?php
if ($_SERVER["HTTP_HOST"]=="www.wheatonmulch.org" || $_SERVER["HTTP_HOST"]=="wheatonmulch.org") {
	Header( "HTTP/1.1 301 Moved Permanently" );
	Header( "Location: http://www.wheatonmulch.com" );
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
	<head>
		<title>Schmidt Lawncare Inc.,Company News</title>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<meta name="author" content="Robert Stevenson">
		<meta content="text/html; charset=us-ascii"
			  http-equiv="Content-Type" />
		<meta name="description" content=" " />
		<meta name="keywords" content="lawncare,aerating" />
		<meta name="Googlebot" content="index,follow" />
		<meta name="Robots" content="index,follow" />
		<link type="text/css" rel="stylesheet"
			  href="css/primary.css" />
	</head>

	<body id="normalbody">
		<div id="page_wrapper">

			<div class="main">
				<?php include 'pageheader.php'?>

				<div class="newsText" >
					<h1>News:</h1>
					<!--<p>
						Schmidt Lawncare Inc., will be resuming snow removal operations begining in 2010.  Snow removal operations ceased in in the Spring of 2008 after we eliminated certain pieces of equipment from our fleet.  We have since spent thousands of dollars to outfit our equipment for the snow removal operation.
					</p>-->

					<p>
						We understand the effects that the harsh ecconomy has brought.  Speak with your neighbors, if two or more of you are interested in services at the same time, we may be able to save you some money.  Sign up for full maintenance and recieve a discount.  Refer a friend, if a friend signs up for service we will provide you with a free service or discount of an equal value.
					</p>

				</div>

				<div class="address" >
					709 Childs Street • Wheaton, IL 60187 • Phone 630.653.1331 • Fax 630.653.1661
				</div>

			</div>
		</div>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
				var pageTracker = _gat._getTracker("UA-13038180-2");
				pageTracker._trackPageview();
			} catch(err) {}</script>
	</body>
</html>

