<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>

    <!-- styles -->
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />

    <!-- icons -->
    <link rel="stylesheet" href="css/foundation-icons.css" />

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,700italic,600,200,200italic,300italic,300,700,600italic,400italic' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="off-canvas-wrapper">

    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- off-canvas title bar for 'small' screen -->
        <div class="mobile-bar title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">

            <div class="title-bar-left">
                <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
                <span class="site-logo-mobile title-bar-title">LaraExam</span>
            </div>

            <div class="title-bar-right">
                <span class="title-bar-title">Account</span>
                <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
            </div>

        </div>

        <!-- off-canvas left menu -->
        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>

            <ul class="vertical dropdown menu" data-dropdown-menu>
                <li><a href="left_item_1">Left item 1</a></li>
                <li><a href="left_item_2">Left item 2</a></li>
                <li><a href="left_item_3">Left item 3</a></li>
                <li><a href="left_item_1">Left item 1</a></li>
                <li><a href="left_item_2">Left item 2</a></li>
                <li><a href="left_item_3">Left item 3</a></li>
                <li><a href="left_item_1">Left item 1</a></li>
                <li><a href="left_item_2">Left item 2</a></li>
                <li><a href="left_item_3">Left item 3</a></li>
                <li><a href="left_item_1">Left item 1</a></li>
                <li><a href="left_item_2">Left item 2</a></li>
                <li><a href="left_item_3">Left item 3</a></li>
            </ul>

        </div>

        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">

            <div class="top-bar-right">
                @if (Auth::guest())
                    <ul class="menu">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>
                @else
                    <ul class="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                @endif
            </div>

        </div>

        <!-- "wider" top-bar menu for 'medium' and up -->
        <div id="widemenu" class="top-bar">
            <div class="top-bar-left">

                <ul class="dropdown menu" data-dropdown-menu>
                    <li class="site-logo menu-text">LaraExam</li>

                    <li class="has-submenu">
                        <a href="#">Item 1</a>
                        <ul class="menu submenu vertical" data-submenu>
                            <li><a href="left_wide_11">Left wide 1</a></li>
                            <li><a href="left_wide_12">Left wide 2</a></li>
                            <li><a href="left_wide_13">Left wide 3</a></li>
                        </ul>
                    </li>
                    <li><a href="left_wide_11">Left wide 1</a></li>
                    <li><a href="left_wide_11">Left wide 1</a></li>
                    <li><a href="left_wide_11">Left wide 1</a></li>
                </ul>
            </div>
            <div class="top-bar-right">
                @if (Auth::guest())
                    <ul class="menu">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>
                @else
                    <ul class="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                @endif
            </div>

        </div>
        <div class="off-canvas-content" data-off-canvas-content>
