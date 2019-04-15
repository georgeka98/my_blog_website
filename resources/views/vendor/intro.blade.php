<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>George Karabassis</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="{{{ asset('images/gk-logo-b.png') }}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->

        <!-- loader -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            @font-face {
                font-family: DalekPinpointBold;
                src: url("{{ asset('fonts/DalekPinpointBold.ttf') }}");
                font-weight: normal;
            }
        </style>
    </head>
    <body>

        <div id="loader">
			<div class="center" id="loader-ul">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
        </div>

        <div id="mobile_side">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="brand">
                <img class="navbar-brand navbar-brand-sidebar" src="/images/gk-logo-w.png"/>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="home_nav nav-link" href="#" >HOME</a>
                </li>
                <li class="nav-item">
                    <a class="about_nav nav-link" href="#" >ABOUT ME</a>
                </li>
                <li class="nav-item">
                    <a class="portfolio_nav nav-link" href="#" >PORTFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="blog_nav nav-link" href="#" >BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="resume_nav nav-link" href="https://drive.google.com/file/d/1eBc9Tq6q0FRxDQIIjd4yrtbPIemCxlQq/view" >RESUME</a>
                </li>
                <li class="nav-item">
                    <a class="contact_nav nav-link" href="#" >CONTACT</a>
                </li>
            </ul>
        </div>

        <div id="mobile_side_bg"></div>

        <div class="intro-section row">
            <canvas class="pg-canvas"></canvas>
            <div class="content">
                <nav class="navbar navbar-expand-xs navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-dark">
                    <!-- <a href="#" class="navbar-brand">Academind</a> -->
                    <a href="/"><img class="navbar-brand" src="/images/gk-logo-w.png"/></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                        <span class="navbar-toggler-icon" onclick="openNav()"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav hover-w">
                            <li class="nav-item">
                                <a class="home_nav nav-link" href="#" >HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="about_nav nav-link" href="#" >ABOUT ME</a>
                            </li>
                            <li class="nav-item">
                                <a class="portfolio_nav nav-link" href="#" >PORTFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="blog_nav nav-link" href="#" >BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="resume_nav nav-link" href="https://drive.google.com/file/d/1eBc9Tq6q0FRxDQIIjd4yrtbPIemCxlQq/view" >RESUME</a>
                            </li>
                            <li class="nav-item">
                                <a class="contact_nav nav-link" href="#" >CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="who-am-i row">
                    <div class="who-am-i-inner container col-xs-12 align-middle">
                        <div class="who-am-i-wrap">
                            <!-- <h6 class="welcome">Hi stranger! I'm</h6> -->
                            <h1 class="full-name">Augement Bionics</h1>
                            <h6 class="welcome-subtitle-teaser">Producing the cheapest bionic arm!</h6>
                            <ul class="social">
                                <li>
                                    <a href="https://www.linkedin.com/in/hyped/" target="_blank" class="linkedin">
                                        <img src="/images/soc-med/linkedin.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.behance.net/georgek98171b0" target="_blank" class="behance">
                                        <img src="/images/soc-med/behance.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>