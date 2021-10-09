@extends('main')

@section('content')
        <div class="about-section  article">
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

    @endsection