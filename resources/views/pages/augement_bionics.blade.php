@extends('main')

@section('content')
        <div class="about-section jumbotron article">
            {{-- <h1>!</h1>
            <p>Describe</p> --}}
            <h1 style="text-align:center">Managing while Adapting</h1>
            <br>
            <p>The idea of creating low cost amputees inspired me to join the team.</p>

            <p>While I was working on adapting myself within the university life, I also spent some time to get to know more about the different student-lead societies around the university. Through my exploration, I came across the Augment Bionincs team, sparking an opportunity for me to learn about low-level programming as well as improve my team-working skills. I joined as soon as I found out about the team, despite my limited knowledge in Electrical Engineering. I realised that the only way to add a value to the team was to learn the basics of hardware design, sensors, and get my hands on with using a microcontroller, specifically an Arduino. After spending nights self-teaching the basics, I volunteered as the Manager of the Electrical/Programming sub-team of the project. This gave me the opportunity to learn from the members of my sub-team, expand my knowledge in electrical engineering, as well as in the  C++ programming knowledge, while usingmy analytical, critical and decision skills to come up with a stable prototype.</p>
            
            <br>
            <div>
                <style>
                .embed-container { 
                    position: relative; 
                    padding-bottom: 28.125%; 
                    height: 0; 
                    overflow: hidden; 
                    max-width: 50%; 
                    margin:auto;
                } 
                .embed-container iframe, .embed-container object, .embed-container embed { 
                    position: absolute; 
                    top: 0; 
                    left: 0; 
                    width: 100%; 
                    height: 100%; 
                }</style>
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/THzEOLaosII' frameborder='0' allowfullscreen></iframe></div>
            </div>
            <br>
            <br>
            
            <p>I was part of the team during my whole 1st year at university. The team was very diverse with roughly 40 students from more than 10 countries around the globe. This allowed me for the first time to work with people comming from different cultures as well as bringing different skills. The whole team compromised of 4 sub-teams. Business and marketing, Mechanical, Design and Electrical/Programming. I was part of the Electrical/Programming team.</p>

            <p>While I was managing and advising my sub-team, I also spent much of my time learning other key technologies such as control flow software (Git), joining Electrical Engineering workshops with aim to learn the basics of Arduino by building mini-projects. This allowed me to use my knowledge to also take part in the prototype development.</p>

            <p>Of course, taking part the team didn't come out free of lessons. I learnt the importance of organization, as well as not overestimating your abilities when it comes taking responsibility of something "risky". It's very important to earn trust and confedence from your peers which comes mostly from by showing your experise in that area. It was only a starting point to expore more opportunities and learn from them.</p>
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