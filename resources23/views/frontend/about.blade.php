@extends('frontend/layouts.app2')
    @section('content')
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ URL::to('/') }}/assets/images/index-3-556x382.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page">
     
        
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">About</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">About</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url({{ URL::to('/') }}/assets/images/small-2505139_960_720.jpg);"></div>
        </div>
      </section>
      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="{{ URL::to('/') }}/assets/images/drink-84533_960_720.jpg" alt="" width="519" height="564"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h3 class="text-spacing-25 font-weight-normal title-opacity-10">Discover New Horizons</h3>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">WHY CHOOSE US</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Skills</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">MISSION</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>We are proud to offer excellent quality and value for money in our tours, which give you the chance to experience your chosen destination in an authentic and exciting way....</p>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-secondary">
                      <div class="progress-header">
                        <p>Tours</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">79</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-orange">
                      <div class="progress-header">
                        <p>Excursions</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">72</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear">
                      <div class="progress-header">
                        <p>Hotel Bookings</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">88</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <div class="row row-40 justify-content-center text-center inset-top-10">
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.87" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Tours</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.74" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Excursions</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.99" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Hotel Bookings</p>
                      </div>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="contact-us.php">Get in touch</a><a class="button button-black-outline button-width-xl-230" href="hot_tours.php">Read more</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <p>Our mission is to provide the ultimate travel planning experience while becoming a one-stop shop for every travel service available in the industry.</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Projects-->
      <section class="section section-sm section-fluid bg-default">
        <div class="container">
          <h3>Destinations</h3>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ URL::to('/') }}/assets/images/istockphoto-1318298968-170667a.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ URL::to('/') }}/assets/images/istockphoto-1318298968-170667a.jpg" data-lightgallery="item"><img src="{{ URL::to('/') }}/assets/images/istockphoto-1318298968-170667a.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">France</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ URL::to('/') }}/assets/images/istockphoto-479824818-612x612.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ URL::to('/') }}/assets/images/istockphoto-479824818-612x612.jpg" data-lightgallery="item"><img src="{{ URL::to('/') }}/assets/images/istockphoto-479824818-612x612.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Italy</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ URL::to('/') }}/assets/images/eiffel-tower-3349075_640.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ URL::to('/') }}/assets/images/eiffel-tower-3349075_640.jpg" data-lightgallery="item"><img src="{{ URL::to('/') }}/assets/images/eiffel-tower-3349075_640.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Paris</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ URL::to('/') }}/assets/images/bridge-1078671_640.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ URL::to('/') }}/assets/images/bridge-1078671_640.jpg" data-lightgallery="item"><img src="{{ URL::to('/') }}/assets/images/bridge-1078671_640.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Germany</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ URL::to('/') }}/assets/images/canal-114290_640.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ URL::to('/') }}/assets/images/canal-114290_640.jpg" data-lightgallery="item"><img src="{{ URL::to('/') }}/assets/images/canal-114290_640.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Netherlands</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ URL::to('/') }}/assets/images/mountains-4292912_640.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ URL::to('/') }}/assets/images/mountains-4292912_640.jpg" data-lightgallery="item"><img src="{{ URL::to('/') }}/assets/images/mountains-4292912_640.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Austria</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ URL::to('/') }}/assets/images/Switzerland.jpeg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ URL::to('/') }}/assets/images/Switzerland.jpeg" data-lightgallery="item"><img src="{{ URL::to('/') }}/assets/images/Switzerland.jpeg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Switzerland</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
        </div>
      </section>
      <!-- What people Say-->
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h3>What People Say</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="{{ URL::to('/') }}/assets/images/360_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">We recently booked nathan tours and travels for a day trip to st hubert. It was a wonderful journey from dusk to dawn. We totally enjoyed the trip. The team were there to clarify us on all doubts and queries. They showed us couple of more spots while returning too. They arrived on time and made our journey very comfortable. It was indeed a safe and comfortable journey. Good luck to them.
</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">ShanthNisha Raja</a></h5>
                <p class="quote-lisa-status">Regular Client</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="{{ URL::to('/') }}/assets/images/360_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">
Thanks to Nathan Travels for wonderful arrangements, safe and nice. I would say this was one of the best trips we've ever taken.will look forward to have a trip like this once again.Special thanks to the team.
</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Samta Arora</a></h5>
                <p class="quote-lisa-status">Regular Client</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="{{ URL::to('/') }}/assets/images/360_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">We went for Giethroon and windmills village in netherlands. I promise you that you will never get a better travels than this one in Belgium. Cost is very reasonable and flexible. We really enjoyed trip with Nathan travels. Best trip I have enjoyed. Especially they become a very good friend of you and guides you in every place. Food is really tasty.
If you really want to plan a trip I really recommend this one.</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Manideep Shivanathuni</a></h5>
                <p class="quote-lisa-status">Regular Client</p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!--Counters-->
      <!-- Counter Classic-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="{{ URL::to('/') }}/assets/images/bg-counter-2.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-26">
            <div class="container">
              <div class="row row-50 justify-content-center border-classic">
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">12</span>
                    </div>
                    <h5 class="counter-classic-title">Awards</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">194</span>
                    </div>
                    <h5 class="counter-classic-title">Tours</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">2</span><span class="symbol">k</span>
                    </div>
                    <h5 class="counter-classic-title">Travelers</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">25</span>
                    </div>
                    <h5 class="counter-classic-title">Team members</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
@endsection