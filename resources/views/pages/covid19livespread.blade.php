@extends('main')

@section('content')
        <div class="about-section jumbotron">
            {{-- <h1>!</h1>
            <p>Describe</p> --}}
            <h1 style="text-align:center">All in One</h1>
            <p>I found it very difficult to find detailed coronavirus information per area.</p>

            <p>The idea of creating <a href="https://covid19livespread.com/">covid19livespread</a> came from the difficulty of finding COVID-19 statistics in the  area I was currently living in (Edinburgh). I remember having discussions with others and asking "how many cases are in Edinburgh?". They had no idea, untill I dig up the internet and found them after lots of research. I realised that if I could do the heavy work, of finding the data of multiple areas from multiple countries arounf the world and put them in one place would be extremely beneficial to have everything well stru tured and organized.</p>

            <p>So I started developing the website at the 6th of May 2020. While working on it, I had 0 experience with using modern front-end and back-end technologies such as node.js, express.js and mongoDB, but I decided to build the website and learn on-the-way. After pullling entire days of work, I finished the website within 3 weeks. People loved the website, and even the department of the School of Informatics, <a href="https://www.ed.ac.uk/informatics/news-events/stories/2020/george-karabassis-covid-tracking-website" target="_blank">wrote an article</a> on their official website.</p>

            <p>Of course building software fast comes at a cost. I skipped the design and analysis stage which came to a massive cost. I had to keep the website up to date by adding more countries and maintain the website. With lots of "spaghetti code", I had no choice but (almost) re-write the whole thing and so I did! I managed to make the website a lot more stable, faster and more accessible.</p>

            <p>Now the website is far from perfect and I still want to make it better and better. So I am currently working on a V2.0 which will come with a brand new design and more features and will become more "mobile friendly". So, why don't you explore <a href="https://covid19livespread.com/">covid19livespread</a>? Going out is estremely useful for our mental health, so keeping track on how many COVID-19 cases there are in your area will certainly give you an insight of what's going on in your area than searching and searching the news. Bookmark the website and with one click you can get the statistics!</p>

            <!-- Grid row -->
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
      <img class="img-fluid" src="{{ asset('images/projects/1/1.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="{{ asset('images/projects/1/2.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="{{ asset('images/projects/1/3.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="{{ asset('images/projects/1/4.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="{{ asset('images/projects/1/5.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="{{ asset('images/projects/1/6.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
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