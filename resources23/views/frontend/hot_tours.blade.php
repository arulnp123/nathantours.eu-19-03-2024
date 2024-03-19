@extends('frontend/layouts.app2')
    @section('content')

  <body>
  
    
        <!-- RD Navbar-->
       
        <!-- Hot tours-->
        <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
          <div class="row row-sm row-40 row-md-50">
          @foreach($hottours as $hottourslist)
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" >
                    <img src="{{ URL::to('/') }}/assets/photo/{{ $hottourslist->photo }}" alt="" width="600" height="366"/></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title">{{ $hottourslist->packages_name }}</h5>
                      <div class="product-big-price-wrap"><span class="product-big-price">€ {{ $hottourslist->price }}</span></div>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                      </div>
                      <p class="product-big-text">{{ $hottourslist->packages_description }}</p>
                      <a class="button button-black-outline button-ujarak" href="{{ route('Book_now2',$hottourslist->id) }}">Buy This Tour</a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            @endforeach
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