<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LaraExam - @yield('page.title')</title>

    <!-- styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/foundation.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/sweetalert.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

    <!-- icons -->
    <link rel="stylesheet" href="{{ URL::asset('foundation-icons/foundation-icons.css') }}" />

    <!-- fonts -->
    {{--<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,700italic,600,200,200italic,300italic,300,700,600italic,400italic' rel='stylesheet' type='text/css'>--}}
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic,900,900italic,300' rel='stylesheet' type='text/css'>

</head>

<body>

<div class="off-canvas-wrapper">

    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- off-canvas title bar for 'small' screen -->
        <div class="mobile-bar title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">

            <div class="title-bar-left">
                <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
                <span id="title-bar-title"><a id="site-logo-mobile" href="{{ route('index') }}">LaraExam</a></span>
            </div>

            <div class="title-bar-right">
                <span class="title-bar-title">Account</span>
                <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
            </div>

        </div>

        <!-- off-canvas left menu -->
        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>

            @include('layouts.partials.navs.mobile-nav-left')

        </div>

        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">

            @include('layouts.partials.navs.mobile-nav-right')

        </div>

        <!-- "wider" top-bar menu for 'medium' and up -->
        <div id="widemenu" class="top-bar">

            <div class="row">

                @include('layouts.partials.navs.desktop-nav-right')
            
                @include('layouts.partials.navs.desktop-nav-left')
            
            </div>  
            
        </div>

        <div class="off-canvas-content" data-off-canvas-content>
