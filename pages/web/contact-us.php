<?php
        ?>
  
    <tr> 
<td></td><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>NATHAN Travels & Tours</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page">
        <!-- RD Navbar-->

        <?php include("header.php")?>

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
            <div class="box-position" style="background-image: url(images/sunrise-1014712_960_720.jpg);"></div>
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
            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
          <form method="post" action="book.php">
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
      
     <?php include("footer.php")?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
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
