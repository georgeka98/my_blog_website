@extends('main')

@section('content')
        <div class="about-section jumbotron article">
            {{-- <h1>A Galactic game. </h1>
            <p>Describe</p> --}}
            <h1 style="text-align: center">Your Skills will be Strained</h1>
            <p>My facination of games, started from a very young age, specifically at 4.</p>

            <p>While I was practicing with 3D modeling as well as the Unity 3D game engine, I was approached by a Discord team on a Facebook Group with an invitation to join as an artist. I happily accepted.</p>

            <p>While I was part in the team of 9 members, I met people from around the globe. Everyone had different skillsets while I took the role of a 3D artist.</p>

            <p>The project ended up being more of a hobby than a primary job, so we all were volunteers and working on the project in our spare time. During the time, I managed to create a human character as well as ammo boxes, however the project has been quiet for the last year.</p>

            <p>Of course, this sparked a small interest in game development, specifically for mobile phones, which I am also keen to spend my spare time to build small games.</p>

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
                  <img class="img-fluid" src="{{ asset('images/projects/2/1.png') }}" alt="Card image cap">
                </div>
                <!-- Grid column -->
              
                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                  <img class="img-fluid" src="{{ asset('images/projects/2/2.png') }}" alt="Card image cap">
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