<?php
if ($_SERVER["HTTP_HOST"] == "www.wheatonmulch.org" || $_SERVER["HTTP_HOST"] == "wheatonmulch.org") {
    Header("HTTP/1.1 301 Moved Permanently");
    Header("Location: http://www.wheatonmulch.com");
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
                <?php include 'pageheader.php' ?>

                <div class="biosText" style="width:750px !important;">
                    <form method="post" onsubmit="javascript:submitForm();" action="http://www.schmidtlawncareinc.com/submitchecklist.php" enctype="multipart/form-data" name="requestinfo">
                        <table class="requestBorder requestTablePosition" width="710" border="0">
                            <tr>
                                <td class="requestInfoHead" style="font-size:13pt;text-align:center;" colspan="4">2012 Service Checklist<br/>
									CONTACT INFORMATION<br/>
                                    <span style="font-style:italic;font-size:75%;color:lime;">(Submitting this form will automatically add you to our service schedule.)</span></td>
                            </tr>
                            <tr>
                                <td><span class="red">*</span>Name</td>
                                <td colspan="1">
                                    <input class="inputAvg" type="text" tabindex="1" value="" maxlength="60" size="50" name="name"/>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="red">*</span>Address</td>
                                <td colspan="1">
                                    <input class="inputAvg" type="text" tabindex="3" value="" maxlength="50" size="40" name="address"/>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="red">*</span>Phone</td>
                                <td colspan="1">
                                    <input class="inputAvg" type="text" tabindex="4" value="" maxlength="13" size="13" name="phone"/>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="red">*</span>Email</td>
                                <td colspan="1">
                                    <input class="inputAvg" type="text" tabindex="5" value="" maxlength="30" size="30" name="email"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr/>
								     Please check the following services you wish to receive for the 2012 season:<br/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="mowing"/>Weekly mowing (Begins mid April and ends October 31) <a href="mowing_options.php">*See Mowing Options</a>
                                </td>
                            </tr>
                            <!-- new -->
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="mowing_w_bagging"/>Weekly mowing with bagging grass and leaves+$5 per can removed from turf
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="fall_mowing"/>Fall mowing with debris removal (Oct-Nov) + $5 per can removed from turf
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="double_cut"/>Double cut my lawn as needed.  Contact me for exact pricing
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="selective_bagging"/>Selective bagging $5 per can removed. Contact me with your bagging needs.
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="springclean"/>Spring clean up   (Begins late March)
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="fallclean"/>Fall clean up   (Ends November 30)
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="coreaerationspring"/>Core aeration (April - May)
                                </td>
                                <td colspan="2">
									Sprinkler <input class="inputAvg" type="radio" tabindex="6" name="coreaerationspringsprinkler" value="Yes"/>Yes
                                    <input class="inputAvg" type="radio" tabindex="6" name="coreaerationspringsprinkler" value="No"/>No
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="coreaerationfall"/>Core aeration (October)
                                </td>
                                <td colspan="2">
									Sprinkler <input class="inputAvg" type="radio" tabindex="6" name="coreaerationfallsprinkler" value="Yes"/>Yes
                                    <input class="inputAvg" type="radio" tabindex="6" name="coreaerationfallsprinkler" value="No"/>No
                                </td>
                            </tr>
                            <!--<tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="dethatch"/>Dethatch (Power Rake)
                                </td>
                                <td colspan="2">
									Sprinkler <input class="inputAvg" type="radio" tabindex="6" name="dethatchsprinkler" value="Yes"/>Yes
                                    <input class="inputAvg" type="radio" tabindex="6" name="dethatchsprinkler" value="No"/>No
                                </td>
                            </tr>-->
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="shrubtrim"/>Spring shrub trimming
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="shrubtrimfall"/>Fall shrub trimming
                                </td>
                            </tr>
                            <!--<tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="poweredge"/>Power edge sidewalks
                                </td>
                            </tr>-->
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="shoveledge"/>Shovel edge mulch beds
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="mulchinstall"/>Mulch installation
                                </td>
                            </tr>
                            <!--<tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="topsoil"/>Top soil installation
                                </td>
                            </tr>-->
                            <tr>
                                <td colspan="2">
                                    <input class="inputAvg" type="checkbox" tabindex="6" name="plowing"/>Snow Plowing Service  (Please call or E-Mail me for quote)

                                </td>
                            </tr>
                            <tr>
                                <td><span class="red"></span>Other 1</td>

                                <td colspan="2">
									<input class="inputAvg" type="input" maxlength="50" size="40" tabindex="6" name="other1"/>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="red"></span>Other 2</td>

                                <td colspan="2">
                                    <input class="inputAvg" type="input" maxlength="50" size="40" tabindex="6" name="other2"/>

                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td colspan="1">
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

