<?php
require 'config.php';
?>

<html>
<head>
    <title>iFlan</title>
    <meta name="keywords" content="iFlan "/>
    <meta name="description" content="iFlan"/>
    <meta name="robots" content="INDEX, FOLLOW"/>
    <meta name="author" content="iFlan"/>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Language" content="ES"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link href="css/styes.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/header.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/screen-animations.js"></script>
    <script src="js/joystick.js"></script>
    <script src="js/automatic.js"></script>
    <script src="js/logs.js"></script>

    <link rel="manifest" href="manifest.json">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="iFlan">
    <meta name="apple-mobile-web-app-title" content="iFlan">
    <meta name="theme-color" content="#59bf6a">
    <meta name="msapplication-navbutton-color" content="#59bf6a">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" sizes="128x128" href="images/icons/flan-icon.png">
    <link rel="apple-touch-icon" sizes="128x128" href="images/icons/flan-icon.png">

    <!-- JS code for video -->
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
    <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>
    <!-- JS code for video -->
    <!-- CSS  -->
    <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">

</head>

<body>

<header>
    <div class="error-bar">
        <span></span>
    </div>

    <nav>
        <span class="back-button" id="go-to-menu"><i class="fas fa-angle-left"></i></span>
        <h1>
            iFlan
            <span><?php echo RASPBERRY_IP; ?></span>
        </h1>


        <span class="nav-right-icons">
            <i class="fas fa-code" id="serial-icon"></i>
            <i class="fas fa-infinity" id="arduino-icon"></i>
            <i class="fas fa-bug" id="go-to-debugger"></i>
        </span>
    </nav>

</header>