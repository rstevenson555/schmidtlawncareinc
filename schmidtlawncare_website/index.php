<?php
if ($_SERVER["HTTP_HOST"] == "www.wheatonmulch.org" || $_SERVER["HTTP_HOST"] == "wheatonmulch.org") {
    Header("HTTP/1.1 301 Moved Permanently");
    Header("Location: http://www.wheatonmulch.com");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <title>Schmidt Lawncare Inc.</title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

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
        <link type="text/css" rel="stylesheet" href="css/primary.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script src="scripts/jquery.tools.min.js"></script>

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

            <div class="main" style="background-image:url('/images/winter_bkg.jpg')!important;width:960!important;" >
                <style  TYPE="text/css">
                    .user-area ul a {
                        color:wheat!important;
                    }
                    #slideshow_id {
                        /*margin-right:15px!important; */
                        /*border:0!important; */
                    }
                    .img-shadow {
                        float:right;
                        background: url(/images/trans-shadow.png) no-repeat bottom right; /* Most major browsers other than IE supports transparent shadow. Newer release of IE should be able to support that. */
                    }

                    .img-shadow img {
                        display: block; /* IE won't do well without this */
                        position: relative; /* Make the shadow's position relative to its image */
                        padding: 5px; /* This creates a border around the image */
                        background-color: #fff; /* Background color of the border created by the padding */
                        border: 1px solid #cecece; /* A 1 pixel greyish border is applied to the white border created by the padding */
                        margin: -6px 6px 6px -6px; /* Offset the image by certain pixels to reveal the shadow, as the shadows are 6 pixels wide, offset it by that amount to get a perfect shadow */
                    }
                    .img-shadow .panel {
                        display: block; /* IE won't do well without this */
                        position: relative; /* Make the shadow's position relative to its image */
                        padding: 5px; /* This creates a border around the image */
                        background-color: #fff; /* Background color of the border created by the padding */
                        border: 1px solid #cecece; /* A 1 pixel greyish border is applied to the white border created by the padding */
                        margin: -6px 6px 6px -6px; /* Offset the image by certain pixels to reveal the shadow, as the shadows are 6 pixels wide, offset it by that amount to get a perfect shadow */
                    }
                    /* override colors */
                    .leftmenu .menu .menu-items{
                        margin-left:20px;
                        color:wheat!important;
                    }
                    .user-area ul {
                        /*background-image: url( '/images/black35pct.png')!important;*/
                        background-image: none!important;
                        background-color: rgba(0,0,0,.35)!important;
                        border-radius: 0 0 20px 20px;
                    }
                    .leftmenu {
                        /*background-image: url('/images/black35pct.png')!important;*/
                        background-image:none!important;
                        background-color: rgba(0,0,0,.35)!important;
                        border-radius: 20px 20px 20px 20px;
                    }
                    .hometext a {
                        color: white!important;
                    }
                    .hometext {
                        color: wheat!important;
                        padding-left: 15px;
                        /*background-image: url('/images/black35pct.png')!important;*/
                        background-image:none!important;
                        background-color:rgba(0,0,0,.35)!important;
                        border-radius: 20px 20px 20px 20px;
                    }
                    .hometext_continued {
                        color: wheat!important;
                        /*background-image: url('/images/black35pct.png')!important;*/
                        background-image:none!important;
                        background-color:rgba(0,0,0,0.35)!important;
                        border-radius: 20px 20px 20px 20px;
                        padding-left: 15px;
                    }
                    .address {
                        background-image:none!important;
                        background-color:rgba(0,0,0,0.50)!important;

                    }
                    .hometext_continued a {
                        color: white!important;
                    }
                    h3 {
                        color:white!important;
                    }
                    .leftmenu a {
                        color:white!important;
                    }
                    .logo img {
                        background: none repeat scroll 0 0 rgba(119, 119, 119, 0.9);
                        border-radius: 20 20 20 20;
                        padding-left: 10px;
                    }

                </style>
                <?php include 'pageheader.php' ?>


                <?php include 'slideshow-new.php' ?>
                <div class="hometext" style="margin-left:15px;color:black;width:368px!important;">
                    Schmidt Lawncare Inc. strives to provide quality and professional service to
                    exceed the <a href="testimonial.php">customer's expectations</a>. Our unmatched attention to detail
                    enables us to meet the needs of every customer.
                </div>
                <?php include 'homeleftmenu-new.php' ?>

                <div >
                    <div class="truck" style="float:right!important;border:0;margin-right:15px;width:320px!important;">
                        <span class="img-shadow"><img style="border: 0" src="/images/slc_trucktrailer.jpg"/></span>
                    </div>
                    <div class="hometext_continued" style="float:left!important;margin-left:15px;width:368px!important;color:black;background-image: url(/images/green70pct.png);">
                        Our Professional staff is committed to an honest approach, reliable
                        and quality service, and a concern for exceeding the client's wants
                        and needs.  Our dedication to a job done right and our professional
                        image is what <a href="whydifferent.php">sets us apart</a>.
                    </div>
                </div>

                <div class="weather_quicklinks_container"  >
                    <div class="wheatonmulch" style="margin-top:20px!important;width:350px!important;">
                        <a href="http://www.wheatonmulch.com" style=";margin-left:0px!important;border:0px;" target="_blank" >
                            <img src="/images/Wheaton%20Mulch.jpg" border="1" style="margin-left:15px;"/>
                        </a>
                        <a href="http://www.rlswebsolutions.com" style="margin-top:20px!important;margin-left:0px!important;border:0px;" target="_blank" >
                            <img src="images/rlswebsolutions.jpg" style="width:200px!important;margin-top:40px!important;margin-left:20px;"/>
                        </a>
                    </div>

                    <div class="quicklinks_right" >
                        <div class="quickLinkSection" >
                            <div class="quickLinkHead">Quick Links</div>

                            <!--<div><a href="coupon.php">New Coupons</a></div>-->
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

