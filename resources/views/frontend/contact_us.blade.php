@extends('frontend/layouts.app2')
    @section('content')
    
        <!-- Breadcrumbs -->
        <section class="breadcrumbs-custom-inset">
          <div class="breadcrumbs-custom context-dark bg-overlay-60">
            <div class="container">
              <h2 class="breadcrumbs-custom-title">Contact Us</h2>
              <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
              </ul>
            </div>
            <div class="box-position" style="background-image: url({{ URL::to('/') }}/assets/images/sunrise-1014712_960_720.jpg);"></div>
          </div>
        </section><br>
      <!-- Contact information-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:#">+32(0)465669964 </a></p>
                  <p class="box-contacts-link"><a href="tel:#"> +32(0)466458787</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">NATHAN Travels & Tours
                    Nerviersstraat 1, Box 30, Antwerp 2018 - Belgium</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">nathantravels.tours@gmail.com</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form-->
      <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Contact Us</h3>
            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
           

            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
           @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
            @endif
          <form method="post" action="{{url('sendemail/send')}}">
          @csrf
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <label class="outer-label" for="name">Your Name </label>
                <div class="form-wrap">
                  <input class="form-input" id="name" type="text" name="name" data-constraints="@Required" required>
                  <label class="form-label" for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <label class="outer-label" for="name">E-mail</label>
                <div class="form-wrap">
                  <input class="form-input" id="email" type="email" name="email" data-constraints="@Email @Required" required>
                  <label class="form-label" for="email">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <label class="outer-label" for="name">Confirm E-mail</label>
                <div class="form-wrap">
                  <input class="form-input" id="cemail" type="cemail" name="cemail" data-constraints="@Email @Required" required oninput="check(this)">
                  <label class="form-label" for="cemail">Confirm E-mail</label>
                </div>
              </div>
            
              <div class="col-md-4">
                <label class="outer-label" for="name">Phone</label>
                <div class="form-wrap">
                  <input class="form-input" id="phone" type="number" name="phone" data-constraints="@Numeric @Required" required>
                  <label class="form-label" for="phone">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <label class="outer-label" for="name">Message</label>
                <div class="form-wrap">
                  <label class="form-label" for="message">Message</label>
                  <textarea class="form-input textarea-lg" id="message" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="button button-primary button-pipaluk"href="mail.php" type="post">Submit</button>
          </form>
        </div>
    <br>
    </div>

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
    
    
    .content {
      position: fixed;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
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
        </style>
  </body>
</html>
@endsection