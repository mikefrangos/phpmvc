<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$title?></title>
        <meta name="description" content="<?=$meta_description?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="theme/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <style>
    <?=$style?>
  </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="above">
    <?=getHTMLForKmomNavlinks($navkmom, "nav-kmom")?>
  </header>

  <header id="header">
    <div id="banner">
  <!--     <a href="index.php">
       <img class="site-logo" src="img/phpmvc_icon_80x80.png" alt="logo" width="80" height="80" /> 
      </a> -->
      <p class="site-title">phpmvc</p>
      <p class="site-slogan">Att koda ett PHP-baserat och MVC-inspirerat ramverk</p>
    </div>
    <?=getHTMLForNavigation($navbar, "navbar")?>
  </header>
  
  <div id="main" role="main">
    <?=$main?>
  </div>

  <footer id="footer">

    <p>&copy; Mike Frangos, 2013</p>
    
    <p>Tools: 
    <a href="http://validator.w3.org/check/referer">html5</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
    <a href="http://validator.w3.org/checklink?uri=<?=$currentUrl?>">links</a>
    <a href="http://validator.w3.org/i18n-checker/check?uri=<?=$currentUrl?>">i18n</a>
    <!-- <a href="link?">http-header</a> -->
    <a href="http://csslint.net/">css-lint</a>
    <a href="http://jslint.com/">js-lint</a>
    <a href="http://jsperf.com/">js-perf</a>
    <a href="http://www.workwithcolor.com/hsl-color-schemer-01.htm">colors</a>
    <a href="http://dbwebb.se/style">style</a>
    </p>
    
    <p>Docs:
    <a href="http://www.w3.org/2009/cheatsheet">cheatsheet</a>
    <a href="http://dev.w3.org/html5/spec/spec.html">html5</a>
    <a href="http://www.w3.org/TR/CSS2">css2</a>
    <a href="http://www.w3.org/Style/CSS/current-work#CSS3">css3</a>
    <a href="http://php.net/manual/en/index.php">php</a>
    <a href="http://www.sqlite.org/lang.html">sqlite</a>
    <a href="http://www.blueprintcss.org/">blueprint</a>
    </p>
  </footer>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
