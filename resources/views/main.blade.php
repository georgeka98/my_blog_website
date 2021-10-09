<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>George Karabassis</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <meta name="apple-mobile-web-app-title" content="George Karabassis">
        <meta name="application-name" content="George Karabassis">
        <meta name="description" content="Hi, I'm George Karabassis">
        <meta name="og:title" property="og:title" content="George Karabassis">
        <meta name="thumbnail" content="{{{ asset('images/gk-logo-b.png') }}}">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{{ asset('images/gk-logo-b.png') }}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/popups.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/project.css') }}" rel="stylesheet">

        <link rel="canonical" href="{{ config('app.url') }}/">

        <!-- loader -->

        {{-- @if (\Request::is('/')) --}}
            <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
        {{-- @endif --}}

        @if (\Request::is('artwork'))
            <link href="{{ asset('css/artwork.css') }}" rel="stylesheet">
        @endif

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134171996-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134171996-1');
        </script>


        <style>
            html, body {
                background-color: #e9ecef;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                /* height: 100vh; */
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

            /* .title {
                font-size: 84px;
            } */

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
                src: url('fonts/DalekPinpointBold.ttf');
                font-weight: normal;
            }
        </style>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
        <link href="{{ asset('css/article.css') }}" rel="stylesheet">

    </head>
    <body>

        {{-- <div class="lightbox_cont">
            <div class="lightbox_center">
                <div class="lightbox_exit">
                    x
                </div>
                <div class="img_canvas_bg">
                    <img src="" alt="" class="img_canvas">
                </div>
            </div>
        </div> --}}

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

        {{-- <div id="welcome">
            <div class="close_welcome">
                <span class="close_btn"></span>
            </div>
            <h2>Welcome!</h2>
            <p>You are among my first visitors! As you may see, my website is still not on its final shape and there are pleanty to do. Remember to visit me soon to see new updates!</p>
        </div> --}}

        <div id="mobile_side">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="brand">
                <img class="navbar-brand navbar-brand-sidebar" src="{{ asset("/images/gk-logo-w.png")}}"/>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="home_nav nav-link" href="/" >HOME</a>
                </li>
                <li class="nav-item">
                    <a class="about_nav nav-link"  >ABOUT ME</a>
                </li>
                <li class="nav-item">
                    <a class="portfolio_nav nav-link"  >PORTFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="blog_nav nav-link"  >BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="resume_nav nav-link" href="https://drive.google.com/file/d/1RlS1kDUt7F54zcYUfYdgvjO5_BLaDzO_/view" >RESUME</a>
                </li>
                <li class="nav-item">
                    <a class="contact_nav nav-link"  >CONTACT</a>
                </li>
            </ul>
        </div>

        <div id="mobile_side_bg"></div>

        <div class="intro-section row">
            <canvas class="pg-canvas"></canvas>
            <div class="content">
                <nav class="navbar navbar-expand-xs navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-dark">
                    <!-- <a  class="navbar-brand">Academind</a> -->
                    <a href="/"><img class="navbar-brand" src="{{ asset("/images/gk-logo-w.png")}}"/></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="">
                        <span class="navbar-toggler-icon" onclick="openNav()"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav hover-w">
                            <li class="nav-item">
                                <a class="home_nav nav-link" href="/" ><p>HOME</p></a>
                            </li>
                            <li class="nav-item">
                                <a class="about_nav nav-link"  ><p>ABOUT ME</p></a>
                            </li>
                            <li class="nav-item">
                                <a class="portfolio_nav nav-link"  ><p>PORTFOLIO</p></a>
                            </li>
                            <li class="nav-item">
                                <a class="blog_nav nav-link"  ><p>BLOG</p></a>
                            </li>
                            <li class="nav-item">
                                <a class="resume_nav nav-link" href="https://drive.google.com/file/d/1RlS1kDUt7F54zcYUfYdgvjO5_BLaDzO_/view" ><p>RESUME</p></a>
                            </li>
                            <li class="nav-item">
                                <a class="contact_nav nav-link"  ><p>CONTACT</p></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="who-am-i row">
                    <div class="who-am-i-inner container col-xs-12 align-middle">
                        <div class="who-am-i-wrap">
                            @if (Request::is('/'))
                                <h6 class="welcome">Hi stranger! I'm</h6>
                                <h1 class="full-name">George Karabassis</h1>
                                <h6 class="welcome-subtitle-teaser">Thank you for stopping by! </h6> 
                            @include("includes._social")

                            @elseif (\Request::is('hyped'))
                                <h1 class="full-name">HypEd</h1>
                                <h6 class="welcome-subtitle-teaser">The future of transportation! </h6>
                            @elseif (\Request::is('cabochon_games'))
                                <h1 class="full-name">Cabochon Games</h1>
                                <h6 class="welcome-subtitle-teaser">Making a galactic science fiction game!</h6>
                            @elseif (\Request::is('augement_bionics'))
                                <h1 class="full-name">Augement Bionics</h1>
                                <h6 class="welcome-subtitle-teaser">Producing the cheapest bionic arm!</h6>
                            @elseif (\Request::is('ncovtrack'))
                                <h1 class="full-name">NCovTrack</h1>
                                <h6 class="welcome-subtitle-teaser">The Complete COVID-19 Dashboard!</h6>
                            @elseif (\Request::is('maskit'))
                                <h1 class="full-name">MaskIt</h1>
                                <h6 class="welcome-subtitle-teaser">Picking the right mask!</h6>
                                <ul class="social">
                                    </li>
                                        <a href="https://play.google.com/store/apps/details?id=com.maskit" target="_blank" rel="noopener noreferrer" style="text-decoration: underline; font-size: 1.75rem">Download From Google Play Store</a>
                                    </li>
                                  
                                  </ul>
                            @elseif (\Request::is('project_protectus'))
                                <h1 class="full-name">Project ProtectUs</h1>
                                <h6 class="welcome-subtitle-teaser">Joining the Efforts to Slow the Spread!</h6>
                            @elseif (\Request::is('techlunar'))
                                <h1 class="full-name">TechLunar</h1>
                                <h6 class="welcome-subtitle-teaser">Sharing my Technical Knowledge!</h6>
                            @elseif (\Request::is('artwork'))
                                <h1 class="full-name">Design portfolio</h1>
                                <h6 class="welcome-subtitle-teaser">“Every artist was first an amateur“ - Ralph Waldo Emerson</h6>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="about-section jumbotron article">
                @yield('content')
            @if (!(\Request::is('/')))
                </div>
            @endif

    
            <div class="portfolio-section jumbotron">

                @if ((\Request::is('/')))
                    <h1>Portfolio</h1>
                    <p>Working on numerus projects, allowed me to expand my horizons and discover new areas which I never thought I would enjoy. I participated in many team projects, with purpose to develop my communication and team-working skills, but also solo projects, with goal to improve my skills.</p>
                    <h2>Projects/Work</h2>
                @else

                    <h1>I have more work!</h1>
                    <p>Did you like this project? Why not check out my other projects?</p>
                @endif

                <div class=" group-projects">
                    <div class="row justify-content-md-center">
                        @if (!(\Request::is('hyped')))
                            <div class="project col-md-4 col-lg-4 col-xl-4">
                                <div class="project-inner">
                                    <a href="hyped">
                                        <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                            <div class="annotation">
                                                <p>A student sosciety - lead project based at the University of Edinburgh focusing on the development of Hyperloop.</p>
                                                <p class="see-more">Click me to learn more!</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/hyped.jpeg') }}" alt="Hyped">
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if (!(\Request::is('augement_bionics')))
                            <div class="project col-md-4 col-lg-4 col-xl-4">
                                <div class="project-inner">
                                    <a href="augement_bionics">
                                        <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                            <div class="annotation">
                                                <p>A student lead project based at the University of Edinburgh focusing on the development of very cheap prosthesis for amputees.</p>
                                                <p class="see-more">Click me to learn more!</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/augement-bionics.png') }}" alt="Hyped">
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if (!(\Request::is('cabochon_games')))
                            <div class="project col-md-4 col-lg-4 col-xl-4">
                                <div class="project-inner">
                                    <a href="cabochon_games">
                                        <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                            <div class="annotation">
                                                <p>An online project with volunteers from all around the globe, focusing on developing a galactic-type game.</p>
                                                <p class="see-more">Click me to learn more!</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/cabochon-games.jpg') }}" alt="Hyped">
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if (!(\Request::is('project_protectus')))
                            <div class="project col-md-4 col-lg-4 col-xl-4">
                                <div class="project-inner">
                                    <a href="project_protectus">
                                        <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                            <div class="annotation">
                                                <p>Combining forces to help lives. Helping Hospitals by providing efficient PPE's</p>
                                                <p class="see-more">Click me to learn more!</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/project_protectus.png') }}" alt="Hyped">
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if (!(\Request::is('ncovtrack')))
                            <div class="project col-md-4 col-lg-4 col-xl-4">
                                <div class="project-inner">
                                    <a href="ncovtrack">
                                        <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                            <div class="annotation">
                                                <p>Creating the ultimate COVID-19 & Vaccine statistic dashboard</p>
                                                <p class="see-more">Click me to learn more!</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/covid19livespread.png') }}" alt="Hyped">
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if (!(\Request::is('maskit')))
                            <div class="project col-md-4 col-lg-4 col-xl-4">
                                <div class="project-inner">
                                    <a href="maskit">
                                        <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                            <div class="annotation">
                                                <p>Choose the right mask to minimize exposure to COVID-19 - Recognized by Google.</p>
                                                <p class="see-more">Click me to learn more!</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/maskit.png') }}" alt="Hyped">
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
                @yield("extra")

        </div>


        <div class="hit-me-up-section jumbotron">
            <h1>Hit me up!</h1>
            <h2>Do I fit in your needs and wanna create something amazing together? Let's turn the burning idea into reality by dropping me a wee <a href="mailto:georgek981@yahoo.com">message</a>!
        </div>
    
        {{-- @if (\Request::is('/')) --}}
            <script src="{{ asset('js/loader.js') }}"></script>

            <script>
                if (!window._EXAMPLE_HTML_) {
                    window._EXAMPLE_HTML_ = true;
                    stop();
                }
            </script>
        {{-- @endif --}}

        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script> -->
        
    </body>

    <footer>
        <div class="jumbotron footer">
            <div class="f-content">
                <h1 class="quote">“There are no secrets to success. It is the result of preparation, hard work, patience, and learning from failure.“</h1>
                <div class="brand">
                    <img class="navbar-brand navbar-brand-sidebar footer_logo" src="/images/gk-logo-w.png"/>
                </div>
                <nav class="navbar navbar-expand-xs navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-dark">
                    <ul class="footer-nav navbar-nav">
                        <li class="nav-item">
                            <a class="home_nav nav-link" href="/" >HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="about_nav nav-link"  >ABOUT ME</a>
                        </li>
                        <li class="nav-item">
                            <a class="portfolio_nav nav-link"  >PORTFOLIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="blog_nav nav-link"  >BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="resume_nav nav-link" href="https://drive.google.com/file/d/1RlS1kDUt7F54zcYUfYdgvjO5_BLaDzO_/view" target="_blank">RESUME</a>
                        </li>
                        <li class="nav-item">
                            <a class="contact_nav nav-link"  >CONTACT</a>
                        </li>
                    </ul>
                </nav>
                
                @include("includes._social")

                <p class="copyright text-white">© {{date("Y")}} George Karabassis. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="{{ asset('js/network_anim.js') }}"></script>
    <script src="{{ asset('js/appear_effect.js') }}"></script>
    <script src="{{ asset('js/popups.js') }}"></script>
    <script src="{{ asset('js/article.js') }}"></script>
    <script src="{{ asset('js/mobile_nav.js') }}"></script>

    @if (Request::is('/'))
        <script src="{{ asset('js/script.js') }}"></script>
        {{-- <script src="{{ asset('js/life_timeline.js') }}"></script> --}}
    @endif
    
</html>
