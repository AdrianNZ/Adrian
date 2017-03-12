<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>

    <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <meta charset="utf-8">
    <title>DesignR | Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="assets/favicon.ico">
    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/apple-touch-icon-114x114.png">

    <!-- ==============================================
    CSS
    =============================================== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/designr-theme-cyan.css">


    <!-- ==============================================
    Fonts
    =============================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900'
          rel='stylesheet' type='text/css'>

    <!-- ==============================================
    JS
    =============================================== -->

    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>


</head>

<body data-spy="scroll" data-target="#main-nav" data-offset="200">

<!--=== PAGE PRELOADER ===-->
<div id="page-loader"><span class="page-loader-gif"></span></div>

<!-- ==============================================
MAIN NAV
=============================================== -->

@include('layouts.nav')
<!--End main-nav -->

<!-- ==============================================
HEADER
=============================================== -->

@include('layouts.header')
<!--End header -->

<!-- ==============================================
SERVICES
=============================================== -->

@include('layouts.service')
<!--End services section-->

<!-- ==============================================
ABOUT
=============================================== -->

@include('about.about')
<!--End about section -->

<!-- ==============================================
SKILLS
=============================================== -->

@include('skills.skills')
<!--End skills section -->

<!-- ==============================================
PORTFOLIO
=============================================== -->
@include('portfolios.portfolios')

<!-- End portfolio section -->

<!-- ==============================================
TWITTER FEED
=============================================== -->

{{--@include('layouts.twitter')--}}
<!-- End Twitter section -->

<!-- ==============================================
CONTACT
=============================================== -->

@include('contacts.contacts')
<!-- End contact section -->

<!-- ==============================================
FOOTER
=============================================== -->

@include('layouts.footer')
<!-- End footer -->

<!-- ==============================================
SCRIPTS
=============================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js">\x3C/script>')</script>

<script src="js/libs/bootstrap.min.js"></script>
<script src='js/jquery.scrollto.js'></script>
<script src='js/jquery.flexslider.min.js'></script>
{{--<script src='js/twitterFetcher_min.js'></script>--}}
<script src='js/jquery.masonry.min.js'></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/designr.js"></script>
</body>

</html>