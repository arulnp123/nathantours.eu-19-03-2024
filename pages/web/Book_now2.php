<?php
include "config.php";
$id=$_GET['id'];
$sql2 = "select * from hot_tours where id = $id ";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
?>
<tr> 
  <td></td>
  <!DOCTYPE html>
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
    <style>
      .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
      }

      html.ie-10 .ie-panel,
      html.lt-ie-10 .ie-panel {
        display: block;
      }
    </style>
  </head>

  <Body>
    <video autoplay muted loop id="myVideo">
      <source src="video\production ID_4299629.mp4" type="video/mp4">

    </video>

    <div class="content">

    </div>

    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page">
      <!-- RD Navbar-->

      <?php include("header.php")?>

      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
          <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure"><img src="photo/<?php echo $row2['images']; ?>" alt="" width="600" height="366" /></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title"><?php echo $row2['packages_name']; ?></h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                      </div>
                      <p class="product-big-text"><?php echo $row2['description']; ?>...</p>

                      <div class="product-big-price-wrap"><span class="product-big-price">€<?php echo $row2['price']; ?></span></div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>

      </section>
      <div class="container">
        <article class="title-classic">
          <div class="title-classic-title">
            <h3>Book Now</h3>
          </div>
          <div class="title-classic-text">
            <br> <br>
          </div>
        </article>
        <form method="post" action="mail2.php">
          <div class="row row-14 gutters-14">
            <div class="col-md-4">
              <label class="outer-label" for="name">Your Name </label>
              <div class="form-wrap">
                  <input class="form-input" id="name" type="text" name="name" data-constraints=" @Required" required>
                
            
                
                  <label class="form-label" for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-4">
              <label class="outer-label" for="name">E-mail</label>
              <div class="form-wrap">
                <input class="form-input" id="email" type="email" name="email" data-constraints="@Required" required>
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
              <label class="outer-label" for="datepicker">Select Date:</label>
              <input class="form-input" min ='<?php echo date('Y-m-d');?>' id="date" type="date" name="date" data-constraints="@Required" required>
            </div>
             <div class="col-md-4">
              <label class="outer-label" for="name">No of days:</label>
             <label class="outer-label" for="Adults">Please select the number of days</label>

              <div class="form-group">

                <select class="form-input 1-100" id="days" name="days" data-constraints="@Required" required>
                </select>
                <span class="select-arrow"></span>
              </div>
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
                    <select class="form-input 1-100" id="kids" name="kids" data-constraints="@Required" required>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
            </div>
          </div>
          <div class="row row-14 gutters-14">
            <div class="col-12">
              <label class="outer-label" for="name">Message</label>
              <div class="form-wrap">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-input textarea-lg" id="message" name="message" data-constraints="@Required"></textarea>    
                <input class="form-input"  type="hidden" name="packages_name" value="<?php echo $row2['packages_name']; ?>" data-constraints="@Required">
                  <input class="form-input"  type="hidden" name="price" value="<?php echo $row2['price']; ?>" data-constraints="@Required">
              </div>
            </div>
          </div>
      </div>

      <br>
      <div class="container text-center">
         <button class="button button-primary button-pipaluk" value="Submit" type="submi">Submit</button>
      </div>

      </form>
    </div>
    <br>

    <?php include("footer.php")?>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      $(function() {
        var $select = $(".1-100");
        for (i = 0; i <= 100; i++) {
          $select.append($('<option></option>').val(i).html(i))
        }
      });
    </script>
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
        font-family: fangsong;
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