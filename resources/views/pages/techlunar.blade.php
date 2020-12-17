@extends('main')

@section('content')
        <div class="about-section jumbotron article">
            {{-- <h1>A Galactic game. </h1>
            <p>Describe</p> --}}
            <h1 style="text-align: center">Spreading Knowledge, move forward</h1>
            {{-- <p>I've been running my Brand, TechLunar since I was 14, well not exactly.</p>

            <p>It all started back when I was 14 in 2012 as I wanted to share my technical knowledge to the world and so I started posting videos on YouTube despite my huge barrier of the English language. Of course the quality of these videos were very simple and boring, I had to start from somewhere. Progress was slow, but worth it to gain confidence putting myself out there and having to go through backlashes and negativity from multiple viewers.</p>

            <p>This hard journey proved to be essential to gain confidence in front of the camera and as well being honest with my viewers when sharing my knowledge. Of course, growing on the platform requires multiple skills to have in your back. Video editing, filming, marketing, SEO are some that are required. Few of the videos I have created attracted millions of views. However, this didn't come free of cost. It took me 5-6 years untill I saw my first video with more than 1 million views. Some  topics of my videos include "Reset or remove forgotten password on ANY iPhone/iPad or iPod (2020)" and "Fix "Windows cannot be installed to this disk. the selected disk has an MBR partition table" error", attracting thousands of happpy viewers.</p> --}}
        </div>
    </div>

    @endsection
    
    @section('other_projects')
        <div class="portfolio-section jumbotron">
                <h1>I have more work!</h1>
                <p>Did you like this project? Why not check out my other projects?</p>
                <div class="container group-projects">
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
                    </div>
                </div>
            </div>
@endsection