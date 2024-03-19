@extends('frontend/layouts.app2')
    @section('content')

    <tr> 
<td></td>
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Popular Tours</span></h3>
          <div class="row row-sm row-40 row-md-50">
          @foreach($populartours as $populartourslist)
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" >
                    <img src="{{ URL::to('/') }}/assets/photo/{{ $populartourslist->photo }}" alt="" width="600" height="366"/></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title">  {{ $populartourslist->packages_name }} </h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                      </div>
                      <p class="product-big-text"> {{ $populartourslist->packages_description }}...</p>
                      
                      <div class="product-big-price-wrap"><span class="product-big-price">€{{ $populartourslist->price }}</span></div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>
            
      </section>
      <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Book Now</h3>
            </div>
            <div class="title-classic-text">
              <br>   <br>
            </div>
          </article>
          <form method="post" action="{{ url('/bookdatah') }}" enctype="multipart/form-data">
           {{ csrf_field() }}
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <label class="outer-label" for="name">Your Name </label>
                <div class="form-wrap">
                  <input class="form-input" id="name" type="text" name="name" data-constraints=" @Required" required>
                  <input class="form-input"  type="hidden" name="packages_name" value="" data-constraints="@Required">
                  <input class="form-input"  type="hidden" name="price" value="" data-constraints="@Required">
                  <label class="form-label" for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <label class="outer-label" for="name">E-mail</label>
                <div class="form-wrap">
                  <input class="form-input" id="email" type="email" name="email"  required>
                  <label class="form-label" for="email">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <label class="outer-label" for="name">Confirm E-mail</label>
                <div class="form-wrap">
                  <input class="form-input" id="cemail" type="cemail" name="cemail" data-constraints="@Required" required oninput="check(this)">
                  <label class="form-label" for="cemail">Confirm E-mail</label>
                </div>
              </div>
            </div>
            <div class="row row-14 gutters-14">
            <div class="col-md-4">
              <label class="outer-label" for="datepicker">Select Date</label>
              <select class="form-input" id="select_date" type="select_date" name="select_date" data-constraints="@Required" required>
              <span class="select-arrow"></span>
              <option> Select Date</option>
                @foreach($tourdates as $tourdate)
                <option value="{{ $tourdate->tour_date }}">{{ $tourdate->tour_date }}</option>
                @endforeach

                </select>
           
              
            </div>
            <div class="col-md-4">
                <label class="outer-label" for="name">Phone</label>
                <div class="form-wrap">
                  <input class="form-input" id="phone" name="phone" data-constraints="@Required" required>
                  <label class="form-label" for="phone">Phone</label>
                </div>
              </div>
            </div>
               <div class="row">
                  <div class="col-4 col-sm-4">
                     
                    <label class="outer-label" for="Adults">Adults>12 years</label>
                    
                      <div class="form-group">
                      
                        <select class="form-input 1-100" id="Adults" name="adults" data-constraints="@Required" required>
                          </select>
                        <span class="select-arrow"></span>
                      </div>
                  </div>
                  <div class="col-4 col-sm-4">
                    <label class="outer-label" for="years">kids 4-12 years</label>
                      <div class="form-group">
                        <select class="form-input 1-100" id="years" name="years" data-constraints="@Required" required>
                          </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4">
                      <label class="outer-label" for="kids">kids <4 years </label>
                        <div class="form-group">
                          <select class="form-input 1-100" id="kids" name="kids" data-constraints="@Required"  required>
                            </select>
                          <span class="select-arrow"></span>
                        </div>
                    </div>
                </div>
                <div class="row row-14 gutters-14">
                  <div class="col-12">
                    @foreach($populartours as $popular)
                      <label class="outer-label" for="name">Message</label>
                      <div class="form-wrap">
                          <label class="form-label" for="message">Message</label>
                          <textarea class="form-input textarea-lg" id="message" name="message" data-constraints="@Required"></textarea>
                          <input class="form-input" type="hidden" name="packages_name" value="{{ $popular->packages_name }}"
                              data-constraints="@Required">
                          <input class="form-input" type="hidden" name="price" value="{{ $popular->price }}"
                              data-constraints="@Required">
                      </div>
                  </div>
                  @endforeach
              </div>
      </div>
     
          <br>
          <div class="container text-center">
            <button class="button button-primary button-pipaluk" href="mail.php" type="post">Submit</button>
          </div>
          
          </form>
        </div>
    <br>
      
    
    </div>
     </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script>
      var video = document.getElementById("myVideo");
      var btn = document.getElementById("myBtn");
      
      function myFunction() {
        if (video.paused) {
          video.play();
          btn.innerHTML = "Pause";
        } else {
          video.pause();
          btn.innerHTML = "Play";
        }
      }
      </script>
    <script src="{!! asset('assets/js/core.min.js') !!}"></script>
    <script src="{!! asset('assets/js/script.js') !!}"></script>
    <script>
      $(function(){
        var $select = $(".1-100");
        for (i=0;i<=100;i++){
            $select.append($('<option></option>').val(i).html(i))
        }
    });</script>
    <script language='javascript' type='text/javascript'>
      function check(input) {
        if (input.value != document.getElementById('email').value) {
          input.setCustomValidity('Emails do not match.');
        } else {
          input.setCustomValidity('');
        }
      }
    </script>
    <style>
  * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Montserrat;
  font-size: 15px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}



#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
label {
    font-family:fangsong;
    font-size: rem;
    padding-right: 0px;
}

select {
    font-size: 0.9rem;
    padding: 2px 5px;
}

    </style>
  </body>
</html>
@endsection