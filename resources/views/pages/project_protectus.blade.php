@extends('main')

@section('content')
        <div class="about-section ">
            {{-- <h1>What do I do in HypEd?</h1>
            <p>My main job is to (explain, explain, explain)</p>
            <p>(add some photos and explain your position further)</p> --}}
            <h1 style="text-align:center">Joining the Efforts to Slow the Spread!</h1>
            <p>I was looking forward being part in the efforts to help during the pandemic crisis.</p>

            <p>While I took part in a Hackathon, I came up with the idea of producing a website called <a href="https://project-protectus.com/">Project-protectUs</a> which allows 3D printer enthusiasts to visit the website and print the PPE designs which would be listed there and ship them to hospitals at a very low cost.</p>

            <p>While it was not a very successful project due to lots of regulations as well as the pandemic was seemed to end during the summer, I joined another hackathon under the name of "Hack 4 The People" with an enthusiastic team to build an app which will help you stay more protected while going out.</p>

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


    @endsection
