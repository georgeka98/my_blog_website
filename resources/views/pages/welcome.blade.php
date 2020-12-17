@extends('main')

@section('content')

@if(Session::has('success') || $errors->any())
    <script>
      $(function() {
          $('#myModal').modal('show');
      });
    </script>
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"> 
              @if(Session::has('success')) 
                Thank you 
              @else 
                Notice
              @endif
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @if(Session::has('success')) 
              <p>{{Session::get('success')}}</p>
            @else 
              {{-- {{$errors->all()}} --}}
              @foreach($errors->all() as $error)
                <p>{{$error}}</p>
              @endforeach
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endif

        <div class="about-section jumbotron">
            <h1>Get to know me!</h1>
            <p>I'm a half Greek, British student, currently living in Edinburgh, UK. I was born in London, UK from Greek parents. At 4, me and my parents moved back to Athens, Greece to be closer to my rest of my family members, where I stayed for 13 years, untill we moved back to the UK to finish my education and study at a top and prestigious university which happened to be at the University Of Edinburgh due to my attraction and love for the Scottish culture. 
            <p>My current path specializes on using Artificial Intelligence and Machine Learning to battle cybersecurity, crimes and improve security systems allowing them to "teach themselves" to detect and fix new exploits. My current undergraduate degree is Computer Science and Artificial intelligence, which will allow me to follow the right route and open the doors to complete my Masters degree hopefully at a top university in the US, together with a PhD degree. After that stage, I am willing to make a startup and accomplish my dreams.</p>
            <p>Of course, I love being a multiactive person. By having done multiple sports including Athletics, Swimming, Tennis, taking part into projects, such as <a href="#">HypEd</a>, a student lead project based at the University of Edinburgh and taking part into multiple volunteering position, such as being a class representative in my 2nd year Informatics class, a school comeete, helping staff to improve teaching by providing tips based on students' feedback and spending the remaining of my time playing the guitar and being surrounded with people I love, shows how much I enjoy everything I do on my life and putting the effort to accomplish great things to master whatever activity I enjoy doing, based on what I was given. Finally, I am always looking forward to discover new things and activities and ensuring every day, I have learned new things!</p>
            <p>In the future, I am looking forward to continue improving myself, based on all the mistakes I do. My ultimate goal is to become an enterprenuer and run a company which will give benefits to the society.</p>
            <p>Drop me a <a href="mailto:georgek981@yahoo.com">message</a>, if you love my journey and what I'm doing!</p>
            <h1 class="timeline_title">A wee timeline</h1>

            <div class="timeline_wrapper">
                <div class="entries">
                    <div class="entry">
                        <div class="title big">1998 (2nd August)</div>
                        <div class="body">
                            <p>Born in London, UK</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2002</div>
                        <div class="body">
                            <p>Moved to Greece</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2014 (May)</div>
                        <div class="body">
                            <p>Won a National School Short <a href="https://www.youtube.com/watch?v=BIi1MSm5Xs8">film</a> Competition</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2015 (May)</div>
                        <div class="body">
                            <p>Won a second National School Short <a href="https://www.youtube.com/watch?v=oQdzVSRRp6I">film</a> Competition</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title big">2015 (June)</div>
                        <div class="body">
                            <p>Moved to the UK</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title big">2016 (January)</div>
                        <div class="body">
                            <p>Assisted Year 11 (GCSE) Math Students (till May 2016)</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2017 (June)</div>
                        <div class="body">
                            <p>Volunteered as an IT technitian at my school (till May 2017)</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title big">2017 (August)</div>
                        <div class="body">
                            <p>Accepted to study at the University of Ednburgh</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2017 (September)</div>
                        <div class="body">
                            <p>Manager of the Programming/&#8203;Electrical team for the student lead Augement Bionics project at the University of Edinburgh</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2018 (June)</div>
                        <div class="body">
                            <p>3D Assets designer at Cabochon Games. Working as an online team, developing a Galactic-type game.</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2018 (September)</div>
                        <div class="body">
                            <p>Accomondation Support Officer at CRM students.</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2018 (September)</div>
                        <div class="body">
                            <p>Software engineer at HypEd. Student siciety in the University of Edinburgh</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2018 (September)</div>
                        <div class="body">
                            <p>Student <a href="http://web.inf.ed.ac.uk/infweb/student-services/ito/students/year1/student-support/reps">Class representative</a> at 2nd year Informatics School.</p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="title">2019 (January)</div>
                        <div class="body">
                            <p>College Quality Assurance Committee at College and Engineering School within Edinburgh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-section jumbotron">
            <h1>Portfolio</h1>
            <p>Working on numerus projects, allowed me to expand my horizons and discover new areas which I never thought I would enjoy. I participated in many team projects, with purpose to develop my communication and team-working skills, but also solo projects, with goal to improve my skills.</p>
            <h3>Team projects</h3>
            <div class="container group-projects">
                <div class="row">
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
                    <div class="project col-md-4 col-lg-4 col-xl-4ol">
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
                    <div class="project col-md-4 col-lg-4 col-xl-4">
                        <div class="project-inner">
                            <a href="project_protectus">
                                <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                    <div class="annotation">
                                        <p>Combining forces to help lives. Helping Hospitals by providing efficient PPE's</p>
                                        <p class="see-more">Click me to learn more!</p>
                                    </div>
                                </div>
                                <img src="{{ asset('images/project_protectus.png') }}" alt="Project ProtectUs">
                            </a>
                        </div>
                    </div>
                    <div class="project col-md-4 col-lg-4 col-xl-4">
                        <div class="project-inner">
                            <a href="covid19livespread">
                                <div class="overlay entry-content flex flex-column align-items-center justify-content-center">
                                    <div class="annotation">
                                        <p>Creating the ultimate COVID-19 statistic dashboard</p>
                                        <p class="see-more">Click me to learn more!</p>
                                    </div>
                                </div>
                                <img src="{{ asset('images/covid19livespread.png') }}" alt="Covid19LiveSpread">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Personal work</h3>
            <p>What do I do in my spare time? I love doing individual work to improve my skills in a particular area.</p>
            <div class="container personal_work">
                <h3>Artwork</h3>
                <p>I enjoy creating artwork and animations, mainly when when it comes to video game design and creating designs of how a project may roughly look like at the end of its production. Click <a href="artwork">here</a> to see my designs!</p>
            </div>
            <h3>Experience</h3>
            <p>How well am I trained? Below you may see my abilities and technical skills.</p>
            <div class="container group-experience">
                <div class="ability-row">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="skill container">
                                <h4>Programming languages</h4>
                                <ul>
                                    <li>
                                            <p class="progress-label">HTML</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated html" style="width:90%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">CSS</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated css" style="width:85%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">JavaScript</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated javascript" style="width:80%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">PHP</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated php" style="width:75%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">SQL</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated sql" style="width:65%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Python</p>
                                            <div class="progress border" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:60%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">C++</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated cpp" style="width:50%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">C</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated clang" style="width:40%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Haskell</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated haskell" style="width:30%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">MIPS (Assembly)</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated mips" style="width:30%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Java</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated java" style="width:30%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Swift</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated swift" style="width:30%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">C#</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated mips" style="width:25%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Pascal</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated swift" style="width:20%"></div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="skill container">
                                <h4 class="second-col">Framework/API</h4>
                                <ul>
                                    <li>
                                            <p class="progress-label">Bootstrap (CSS)</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated bootstrap" style="width:70%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Laravel (PHP)</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated laravel" style="width:65%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">YouTube API</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated youtube_api" style="width:45%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">jQuery</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated jquery" style="width:40%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">NumPy</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated numpy" style="width:30%"></div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ability-row">
                    <h4>Tools and other related skills</h4>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="skill container">
                                <ul>
                                    <li>
                                            <p class="progress-label">Front-end web development</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Back-end web development</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:70%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Microsoft Office</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:70%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Object Oriented Programming</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated php" style="width:60%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Adobe Photoshop</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated php" style="width:60%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Adobe Premiere Pro</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated php" style="width:60%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Blender</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:55%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">MVC Pattern</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:50%"></div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="skill container">
                                <ul>
                                    <li>
                                            <p class="progress-label">Adobe After Effects</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated AE" style="width:45%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">iOS app Development</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated ios_dev" style="width:45%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Game development</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated game_dev" style="width:40%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Unity 3D</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated unity_3d" style="width:40%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Arduino</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated arduino" style="width:40%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Adobe Illustrator</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated AI" style="width:35%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">Functional Programming</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated functional_programming" style="width:30%"></div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ability-row">
                    <h4>Languages</h4>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="skill container">
                                <ul>
                                    <li>
                                            <p class="progress-label">Greek (Native)</p>
                                            <div class="progress border">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:80%"></div>
                                            </div>
                                    </li>
                                    <li>
                                            <p class="progress-label">English (second language)</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:70%"></div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="skill container">
                                <ul>
                                    <li>
                                            <p class="progress-label">French (very basic)</p>
                                            <div class="progress border">
                                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated AE" style="width:10%"></div>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection