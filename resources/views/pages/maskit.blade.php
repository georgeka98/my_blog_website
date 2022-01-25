@extends('main')

@section('content')
        <div class="about-section ">
            {{-- <h1>!</h1>
            <p>Describe</p> --}}
            <h1 style="text-align:center">Wear your mask... Effectively.</h1>
            <p>A strong team collaboration makes the dream work!</p>

            <p>The MaskIt project was created as part of a programming & innovation competition (Hackathon) by me, and 2 other CS students from the University of Edinburgh.</p>

            <p>The competition we attended is called <a href="https://hackforthepeople.devpost.com/" target="_blank" rel="noopener noreferrer">Hack 4 the People</a>, which is organized by students from the <a href="https://scholar.harvard.edu/hackathon/home" target="_blank" rel="noopener noreferrer">University of Harvard</a> in Massachusetts. I initially received an invitation from the school email to join and eventually I got introduced with 2 other students from my school.</p>

            <p>The idea pf creating MaskIt came through a long brainstorming conversation with my team. The competition lasted for 3 days, where we eventually came up with a prototype of the concept. MaskIt would be a mobile app which would give you a detailed description of what each mask does and in which scenarios is most effective. The goal of the competition was to <a href="https://devpost.com/software/maskit-smwf23" target="_blank" rel="noopener noreferrer">create a prototype</a> of the idea as well as create a pre-recorded video presentation of it.</p>

            <div class="text-center">
              <style>
              .embed-container { 
                  position: relative; 
                  padding-bottom: 50%; 
                  height: 0; 
                  overflow: hidden; 
                  /* max-width: 50%;  */
                  margin:auto;
              } 
              .embed-container iframe, .embed-container object, .embed-container embed { 
                  position: absolute; 
                  top: 0; 
                  left: 0; 
                  width: 100%; 
                  height: 100%; 
              }</style>
              <div class='embed-container'>
                <iframe src='https://www.youtube.com/embed/YKJ-ew2vVT0' frameborder='0' allowfullscreen></iframe>
              </div>
              <p style="font-size: 1rem">MaskIt presentation at the Hack 4 the People Presentation Day on the 23rd of August 2020.</p>
            </div>

            <p>We eventually won a prize for best use of Google Cloud services, and we were one of the 28 out of 381 judged teams invited to participate to a mentorship program, organized by Google Employees.</p>

            <p>Through the mentorship program, we were assigned by a Software Engineer from Google, who helped us take the idea from the very beginning to the end. We began with brainstorming, prioritization features for a prototype, creating a timeline and offered us a general guidance when it came with technology choices, as well as giving us consistent feedback on the design of the app.</p>

            <p>Eventually, <a href="https://events.withgoogle.com/demo-week-hackathon-fund/#content">we were one of the 13 teams</a> invited to present what we have done throughout the mentorship program to a panel of judges from Google in May 2020. This is the first Hackathon I win after participating 6 more in the past without receiving a recognition. When I joined my first Hackathon, I ended up in the last place. After joining more, I learned how to better work with people under pressure and became a better communicator.</p>
            
            <div class="text-center">
              <style>
              .embed-container { 
                  position: relative; 
                  padding-bottom: 50%; 
                  height: 0; 
                  overflow: hidden; 
                  /* max-width: 50%;  */
                  margin:auto;
              } 
              .embed-container iframe, .embed-container object, .embed-container embed { 
                  position: absolute; 
                  top: 0; 
                  left: 0; 
                  width: 100%; 
                  height: 100%; 
              }</style>
              <div class='embed-container'>
                <iframe src='https://www.youtube.com/embed/QURbXsIdOYU' frameborder='0' allowfullscreen></iframe>
              </div>
              <p style="font-size: 1rem">MaskIt final pre-recorded presentation to the Google Panel.</p>
          </div>

            <p>Given we were only 1 out of two non-US based teams who made it that far, we were also featured in the <a href="https://www.edinburghnews.scotsman.com/news/people/edinburgh-university-computer-science-students-win-chance-to-be-mentored-by-google-experts-3213405" target="_blank" rel="noopener noreferrer">local news outlet of Edinburgh</a> for our achievement. </p>
            
            <p>The members of the team were: Adrien, Eve, and me, where Adrien was mainly charge of the UX, UI design, Eve was the researcher and database developer, and me the main developer of the app. The app can be downloaded for free from the <a href="https://play.google.com/store/apps/details?id=com.maskit" target="_blank" rel="noopener noreferrer">Google Play Store</a>.</p>

            <p>Download the MaskIt app from the Google Play store by  <a href="https://play.google.com/store/apps/details?id=com.maskit" target="_blank" rel="noopener noreferrer" style="text-decoration: underline; font-size: 1.75rem">clicking here</a>.</p>

            <div class="mb-3 pics animation all 2">
                <figure>
                    <img class="img-fluid" src="{{ asset('images/projects/maskit/maskit team.jpeg') }}" alt="Card image cap">
                    <p style="font-size: 1rem">The MaskIt Team.</p>
                  </figure>
            </div>

            
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
  <h2 style="text-align:center">MaskIt Gallery</h2>
  <div class="gallery" id="gallery">
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="{{ asset('images/projects/maskit/Screenshot_20211009-184944.png') }}" alt="Card image cap">
      </div>
      <!-- Grid column -->


          <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="{{ asset('images/projects/maskit/Screenshot_20211009-201652.png') }}" alt="Card image cap">
      </div>
      <!-- Grid column -->


          <!-- Grid column -->
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="{{ asset('images/projects/maskit/Screenshot_20211009-184952.png') }}" alt="Card image cap">
          </div>
          <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="{{ asset('images/projects/maskit/Screenshot_20211009-203954.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->


                  <!-- Grid column -->
    <div class="mb-3 pics animation all 3">
        <img class="img-fluid" src="{{ asset('images/projects/maskit/Screenshot_20211009-185000.png') }}" alt="Card image cap">
      </div>
      <!-- Grid column -->


        <!-- Grid column -->
        <div class="mb-3 pics animation all 3">
            <img class="img-fluid" src="{{ asset('images/projects/maskit/Screenshot_20211009-204006.png') }}" alt="Card image cap">
        </div>

  
  </div>
  <!-- Grid row -->
</div>

@endsection