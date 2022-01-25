@extends('main')

@section('content')
        <div class="about-section ">
            {{-- <h1>!</h1>
            <p>Describe</p> --}}
            <h1 style="text-align:center">All in One</h1>
            <p>I found it very difficult to find detailed coronavirus information per area.</p>

            <p>The <a href="https://ncovtrack.com/">NCovTrack</a> website aimed to become the most detailed vaccine and COVID-19 Dashboard by providing detailed statistics of these statistics in provisional and county-wise level by country around the world by automatically fetching the data from governmental and health department bodies of each country. Since the beginning of the development, the website underwent multiple re-innovations including code refactoring, improving the UX & UI design, and adding more data. Since the website became live on the 24th of May 2020 under the name of Covid19LiveSpread, the website received over 30M total visits!</p>

            <p>The idea of creating <a href="https://ncovtrack.com/">NCovTrack</a> came from the beginning of the pandemic when my grandparents were unaware of how the coronavirus is expanding in my home country, Greece. The statistics would be scattered in the web and was difficult to find them, as well as they were not up to date at that time. At the same time, data from each sub-region (council) of Scotland was also not widely available. This gave me the opportunity to create a new website where everyone would be able to visit and find the exact data they are looking for from their local area.</p>

            <div class="mb-3 pics animation all 2">
                <figure>
                    <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/old.png') }}" alt="Card image cap">
                    <figcaption>Mobile version of NCovTrack at its launch date.</figcaption>
                  </figure>
            </div>

            <p>So, I started developing the website on the 6th of May 2020. While working on it, I had 0 experience with using modern front-end and back-end technologies such as node.js, express.js and mongoDB, but given the unlimited resources the web has nowadays, I was able to learn everything I needed to create the website from scratch. After pulling entire days of work with some sleepless nights, I finished the website within 3 weeks. People in my network gave me support for the website and the department of the School of Informatics of the University of Edinburgh <a href="https://www.ed.ac.uk/informatics/news-events/stories/2020/george-karabassis-covid-tracking-website" target="_blank">featured the project</a>.</p>

            <p>After a long time working for this project, not only I expanded my technical knowledge, but also, I learned how important planning is. This is my first time undertaking a project of such a scale and despite making many costly mistakes, I was determined to keep improving the website based on each visitor feedback. The website started receiving a high influx of visitors in January 2021 after posting it on a few Facebook groups regarding the vaccination statistics and due to the high demand, I kept improving the design and adding more data to serve a broader audience from more countries outside the USA, UK and Greece. Thanks for the diverse population and to my volunteers, the website is translated into 21 different languages.</p>
            
            <p>The website has been featured in top newspapers in Greece, including <a href="https://www.in.gr/2021/03/04/b-science/technology/o-ellinas-pou-dimiourgise-ti-diki-tou-istoselida-gia-stoixeia-gia-ton-koronaio/" target="_blank" rel="noopener noreferrer">in.gr</a>, as well as speaking to multiple Greek TV channels about the project, as well as in Texas. Interviews have been uploaded in my <a href="https://yotubehttps://www.youtube.com/channel/UCufTSmns-LWP2d2UMG2RsfA">personal YouTube channel</a>. The website was even used briefly by a <a href="https://www.ocregister.com/2021/06/01/coronavirus-heres-how-much-of-california-is-fully-vaccinated-and-the-tier-assignments-as-of-june-1/">News Media company</a> for reporting the vaccination statistics in California.</p>

            <p>The website was created by using node.js and express.js, together with some Python for backend and vanilla JavaScript in the front-end. As I am currently learning React.js, I am planning on converting the entire front-end system into React as part of my learning process.</p>

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
  <h2 style="text-align:center">NCovTrack Gallery</h2>
  <div class="gallery" id="gallery">
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 15.51.20.png') }}" alt="Card image cap">
      </div>
      <!-- Grid column -->


          <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 15.50.57.png') }}" alt="Card image cap">
      </div>
      <!-- Grid column -->


                        <!-- Grid column -->
                        <div class="mb-3 pics animation all 1">
                            <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 18.14.30.png') }}" alt="Card image cap">
                          </div>

          <!-- Grid column -->
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 15.51.27.png') }}" alt="Card image cap">
          </div>
          <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 15.52.14.png') }}" alt="Card image cap">
    </div>
    <!-- Grid column -->


                  <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 18.16.44.png') }}" alt="Card image cap">
      </div>
    <!-- Grid column -->

                  <!-- Grid column -->
    <div class="mb-3 pics animation all 3">
        <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 15.51.04.png') }}" alt="Card image cap">
      </div>
      <!-- Grid column -->


        <!-- Grid column -->
        <div class="mb-3 pics animation all 3">
            <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 18.13.29.png') }}" alt="Card image cap">
        </div>

              <!-- Grid column -->
              <div class="mb-3 pics animation all 3">
                <img class="img-fluid" src="{{ asset('images/projects/ncovtrack/Screenshot 2021-10-08 at 15.53.24.png') }}" alt="Card image cap">
              </div>
  
  </div>
  <!-- Grid row -->
</div>

@endsection