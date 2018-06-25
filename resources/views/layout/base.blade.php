<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Glossy Box Free Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<!-- templatemo 321 glossy box -->
<!--
Glossy Box Template
http://www.templatemo.com/preview/templatemo_321_glossy_box
-->
</head>
<body>

<div id="templatemo_wrapper_outer">
	<div id="templatemo_wrapper">

    	<div id="templatemo_header">
			<div id="site_title">
                <h1><a href="#"><strong>GLOSSY</strong> BOX<span>YOUR TAGLINE GOES HERE</span></a></h1>
            </div> <!-- end of site_title -->

            <ul id="social_box">
                <li><a href="#"><img src="images/facebook.png" alt="facebook" /></a></li>
                <li><a href="#"><img src="images/twitter.png" alt="twitter" /></a></li>
                <li><a href="#"><img src="images/linkedin.png" alt="linkin" /></a></li>
                <li><a href="#"><img src="images/technorati.png" alt="technorati" /></a></li>
                <li><a href="#"><img src="images/myspace.png" alt="myspace" /></a></li>
            </ul>

			<div class="cleaner"></div>
		</div>

		<div id="templatemo_menu">
            <ul>
                <li><a href="/" class="current">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/partners">Partners</a></li>
                <li><a href="/about us">About us</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div> <!-- end of templatemo_menu -->




        @yield('content')

             @yield('contact')

                 @yield('about_us')

                     @yield('services')

                         @yield('partners')


		<div id="templatemo_content_wrapper_bottm"></div>

		<div id="templatemo_footer">

             Copyright © 2048 <a href="#">Your Company Name</a>

       </div>

	</div> <!-- end of wrapper -->
</div> <!-- end of wrapper_outer -->

</body>
</html>