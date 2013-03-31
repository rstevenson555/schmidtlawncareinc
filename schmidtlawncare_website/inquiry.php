<?php
if ($_SERVER["HTTP_HOST"]=="www.wheatonmulch.org" || $_SERVER["HTTP_HOST"]=="wheatonmulch.org") {
	Header( "HTTP/1.1 301 Moved Permanently" );
	Header( "Location: http://www.wheatonmulch.com" );
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
	<head>
		<title>Schmidt Lawncare Inc.,Customer Inquiry</title>
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

			<div class="main" >
				<?php include 'pageheader.php'?>

				<div class="biosText" style="width:750px !important;">
					<form method="post" onsubmit="javascript:submitForm();" action="http://www.schmidtlawncareinc.com/submitinquiry.php" enctype="multipart/form-data" name="requestinfo">
						<table class="requestBorder requestTablePosition" width="600" border="0">
							<!--<div class="requestInfoHead">Request Info</div>-->
							<tr>
								<td class="requestInfoHead" colspan="2">Request Info</td>
							</tr>
							<tr>
								<td><span class="red">*</span>Name</td>
								<td>
									<input class="inputAvg" type="text" tabindex="1" value="" maxlength="60" size="50" name="name"/>
								</td>
							</tr>
							<tr>
								<td>Company</td>
								<td>
									<input class="inputAvg" type="text" tabindex="2" value="" maxlength="50" size="30" name="company"/>
								</td>
							</tr>
							<tr>
								<td><span class="red">*</span>Address</td>
								<td>
									<input class="inputAvg" type="text" tabindex="3" value="" maxlength="50" size="40" name="address"/>
								</td>
							</tr>
							<tr>
								<td><span class="red">*</span>City</td>
								<td>
									<input class="inputAvg" type="text" tabindex="3" value="" maxlength="30" size="20" name="city"/>
								</td>
							</tr>
							<tr>
								<td><span class="red">*</span>Phone</td>
								<td>
									<input class="inputAvg" type="text" tabindex="4" value="" maxlength="13" size="13" name="phone"/>
								</td>
							</tr>
							<tr>
								<td><span class="red">*</span>Email</td>
								<td>
									<input class="inputAvg" type="text" tabindex="5" value="" maxlength="30" size="30" name="email"/>
								</td>
							</tr>
							<tr>
								<td><span class="red">*</span>Service Of Interest</td>
								<td>
									<input class="inputAvg" type="text" tabindex="6" value="" maxlength="30" size="30" name="interest"/>
								</td>
							</tr>
							<tr>
								<td>Preferred Time For Callback</td>
								<td>
									<input class="inputAvg" type="text" tabindex="7" value="" maxlength="9" size="9" name="callback"/>
								</td>
							</tr>
							<tr>
								<td><span class="red">*</span>Comments</td>
								<td>
									<textarea NAME="comments" COLS=40 tabindex="8" ROWS=6></textarea>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input class="inputAvg" type="submit" tabindex="9" value="Submit" maxlength="5" size="5" name="submit"/>
								</td>
							</tr>
							<tr>
								<td><span class="red">* Fields are required.</span></td>
							</tr>
						</table>
					</form>

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

