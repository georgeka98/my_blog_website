@extends('main')

@section('content')

            {{-- <h1>What do I do in HypEd?</h1>
            <p>My main job is to (explain, explain, explain)</p>
            <p>(add some photos and explain your position further)</p> --}}
            <h1 style="text-align:center">Building the Future of Transportation</h1>
            <p>Joining a highly successful team left me a million lessons.</p>

            <p>Hearing the University of Edinburgh Hyperloop Society was among the most successful societies in Edinburgh, as well as it was based on Engineering, I decided to join. It was an opportunity for me to be part of a highly successful team based on a project based on hardware.</p>

            <p>I joined the Software Team in the propulsion sub-team in September 2018. My duties were to rewrite the software responsible of the acceleration of the pod at the start of the journey, as at the time, the team would move to a different type of magnetic motors. Part of rewriting the software, I also ensured that it would be easier to understand and make changes by the upcoming members in the following years.</p>

            <p>Eventually, the Hyperloop team became among the finalists in <a href="https://web.archive.org/web/20180831100933/https://www.spacex.com/hyperloop">The Hyperloop Competition</a> organized by SpaceX still being the only UK team to do so. Between the 9th and 23rd of July, we travelled to California to participate in the competition by completing a set of tests for our pod with the goal to get our pod in the SpaceX test track. The test track was in Hawthorne LA, CA, right next to SpaceX headquarters. Unfortunately, we narrowly missed the chance of getting our pod to the test track due to a few failures in some of our tests.</p>

            <p>I decided to re-join the team the upcoming year, 2019 and this time to be part of the Navigation sub-team, again in Software team. The Navigation sub-team is responsible for reporting the current position, acceleration, and velocity state of the pod during its journey with the least amount of noise possible from the sensors. We used the Kalman Filter Algorithm which would take input values from 2 IMU sensors and predict the next state of the pod in the next time interval. I was responsible of the Kalman Filter Algorithm, together with 2 other team members where we also improved the quality of the code. Also, I was responsible on rewriting the software responsible in reading the IMU data.</p>

            <p>By the end of February in 2020, I decided to move to the Outreach team where I gave a short lecture to a local High School staff regarding the concept of the Hyperloop as well as the journey of our team from the start. I stayed in the Outreach team and was about to do another speech in April but was cancelled due to COVID-19.</p>

            <p>Throughout my participation in HypEd, I learnt loads of lessons including effective team dynamics, effective communication, earning trust, time management, team management, prioritisation etc. It was a great experience and worth the lessons which I can learn from and apply them to every project I would work since then.</p>

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
                  <img class="img-fluid" src="{{ asset('images/projects/4/1.png') }}" alt="Card image cap">
                </div>
                <!-- Grid column -->
              
                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                  <img class="img-fluid" src="{{ asset('images/projects/4/2.png') }}" alt="Card image cap">
                </div>
                <!-- Grid column -->
              
                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                  <img class="img-fluid" src="{{ asset('images/projects/4/3.png') }}" alt="Card image cap">
                </div>
                <!-- Grid column -->
              
                
              
              </div>
              <!-- Grid row -->


            @endsection
        
