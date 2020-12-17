@extends('main')

@section('content')
        <div class="about-section jumbotron">
            {{-- <h1>What do I do in HypEd?</h1>
            <p>My main job is to (explain, explain, explain)</p>
            <p>(add some photos and explain your position further)</p> --}}
            <h1 style="text-align:center">Joining the Efforts to Slow the Spread!</h1>
            <p>I was looking forward to be part in the efforts to help during the pandemic crisis.</p>

            <p>While I took part in a Hackathon, I came up with the idea of producing a website called <a href="https://project-protectus.com/">Project-protectUs</a> which alow 3D printer enthusiasts to visit the website and print the PPE designs which would be listed there and ship them to hospitals at a very low cost.</p>

            <p>While it was nota very successful project due to lots of regulations as well as the pandemic was seemed to end during the summer, I joined another hackathon under the name of "Hack 4 The People" with an enthusiastic team to build an app which will help you stay more protected whiile going out.</p>

            <p>Me and my new team are planning to use Project-protectUs to provide PPE for countries in Africa.</p>

            <div class="row">

                <!-- Grid column -->
                {{-- <div class="col-md-12 d-flex justify-content-center mb-5">
              
                  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
                  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
                  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>
              
                </div> --}}
                <!-- Grid column -->
              
            </div>
            <!-- Grid row -->
            
            <!-- Grid row -->
            <div class="gallery" id="gallery">
              
                <!-- Grid column -->
                <div class="mb-3 pics animation all 2">
                  <img class="img-fluid" src="{{ asset('images/projects/3/1.png') }}" alt="Card image cap">
                </div>
                <!-- Grid column -->
              
                
              
              </div>
              <!-- Grid row -->
            </div>

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
                        @if (!(\Request::is('covid19livespread')))
                            <div class="project col-md-4 col-lg-4 col-xl-4">
                                <div class="project-inner">
                                    <a href="covid19livespread">
                                        <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                            <div class="annotation">
                                                <p>Creating the ultimate COVID-19 statistic dashboard</p>
                                                <p class="see-more">Click me to learn more!</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/covid19livespread.png') }}" alt="Hyped">
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
@endsection
