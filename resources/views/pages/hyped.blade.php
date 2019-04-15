@extends('main')

@section('content')
        <div class="about-section jumbotron">
            {{-- <h1>What do I do in HypEd?</h1>
            <p>My main job is to (explain, explain, explain)</p>
            <p>(add some photos and explain your position further)</p> --}}
            <h1 style="text-align:center">Under Construction</h1>
            <p>Writting in progress. Check back soon!</p>
        </div>

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
