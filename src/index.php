<?php
    if (isset($_SERVER['PATH_INFO'])) {
        $path = trim($_SERVER['PATH_INFO'], '/');
    } elseif (isset($_SERVER['ORIG_PATH_INFO'])) {
        $path = trim(str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['ORIG_PATH_INFO']), '/');
    } else { $path = ''; }
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.2.2.min.js"><\/script>')</script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>

    //see if which is there
    $(document).ready(function(){
        var which="<?php echo $_GET['arg']; ?>";

        console.log(which);
        if( which !== ""){
           transitionGrid(which);
        }
       });
    </script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<div id="wrapper">


    <!--<img id="back" src="img/left_arrow.svg" onclick="killTag()">-->

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" xml:space="preserve" style="width:100px; position:absolute; top: 2.4em; right: 3em; height: 3em;" onclick="killTag()">
        <path style="display: none" transform="scale(2)" id="back" d="M11.3,21c-4.2-2.8-8-7.2-8.1-7.4C3.1,13.5,3,13.2,3,13c0-0.2,0.1-0.5,0.2-0.7c0.1-0.2,4-4.6,8.1-7.4  c0.3-0.2,0.7-0.2,1.1-0.1C12.8,5.1,13,5.4,13,5.8v3.7c0,0,8.7,0.5,9.1,0.8c0.6,0.4,0.9,1.7,0.9,2.7c0,1.1-0.4,2.2-0.9,2.6  c-0.4,0.3-9.1,0.9-9.1,0.9v3.7c0,0.4-0.2,0.7-0.6,0.9C12.1,21.3,11.7,21.2,11.3,21z" fill="#6f6f6f"/>
    </svg>

    <a href="index.php"><h1 id="logo"><strong><em>brb</em></strong></h1></a>


    <div class="grid" id="grid">
        <div class="grid__row">
            <a><div class="grid__item" style="background-color: #2DA4A8" onclick="transitionGrid('coffee')"><img class="gridImg" src="img/cupanimation.gif"></div><p class="gridText">/coffee</p></a>
            <a><div class="grid__item" style="background-color: #FFFFFF" onclick="transitionGrid('meeting')"><img class="gridImg" src="img/meeting.gif"></div><p class="gridText">/meeting</p></a>
            <a><div class="grid__item" style="background-color: #2686EC" onclick="transitionGrid('pizza')"><img class="gridImg" src="img/pizza.gif"></div><p class="gridText">/pizza</p></a>
        </div>
        <div class="grid__row">
            <a><div class="grid__item" style="background-color: #FFFFFF" onclick="transitionGrid('bathroom')"><img class="gridImg" src="img/bathroom.gif"></div><p class="gridText">/bathroom</p></a>
            <a><div class="grid__item" style="background-color: #007976" onclick="transitionGrid('lunch')"><img class="gridImg" src="img/final.gif"></div><p class="gridText">/lunch</p></a>
            <a><div class="grid__item" style="background-color: #FFFFFF" onclick="transitionGrid('brb')"><img class="gridImg" src="img/brb.gif"></div><p class="gridText">/brb</p></a>
        </div>
    </div>

    <!--<h3 id="time"><strong><em></em></strong></h3>-->

</div>

<div id="footer"><p>More tags coming soon!</p></div>

<div id="blank"></div>


<div id="footerlinks"> <span><a href="about.html">About&#8195;</a></span><span><a href="contact.html">Contact</a></span></div>



<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
