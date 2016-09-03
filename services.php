<?php /* Template Name: Services Template */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Residence</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="services">

    <!-- TODO: Carousel weird layout issue
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php bloginfo('template_url'); ?>/img/slider-3.jpg" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="<?php bloginfo('template_url'); ?>/img/slider-3.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="<?php bloginfo('template_url'); ?>/img/slider-3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="overview">
      <div class="container">
        <div class="row tiles">
          <div class="col-md-6 tile">
            <p>Premium service for owners of luxury residential properties in Cape Town. A service that seeks to secure short-term returns from discreet high net worth visitors.</p>
          </div>
          <div class="col-md-6 tile">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora maiores placeat officiis, aut quam tenetur aliquid.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="about">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2>we cater to both guest and owner</h2>

            <p>At In Residence, we believe that there’s no reason for your lifestyle to be interrupted by the administration and 
            practicalities of running, managing and enjoying a second home.</p> 

            <p>That’s why we offer a premium service for owners of luxury residential properties in Cape Town. A service that seeks 
            also to secure short-term returns from discreet high net worth visitors. And in additon ensures that you’re able to 
            make the most of your stay in the Cape.</p>

            <p>We have over 40 stunning villas to offer. Each property has its own unique elements which allows for us to select 
            the best solution for you.</p>

            <p>
            We cover all the most desirable areas such as the Atlantic Seaboard (Camps Bay, Clifton) (elite suburb protected from 
            the wind), Bakoven, Bantry Bay, Sea Point, the V&amp;A Waterfront (amazing villas with river frontage) to the leafy 
            suburbs of Constantia and Hout Bay (offering larger property).</p>

            <p>After all, we believe that, to be enjoyed to the full, life should be effortless. Don’t you?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="enquiries">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Guests</h2>
            <p>In Residence has an extensive list of thoroughly-vetted contacts and suppliers to make your stay as pleasant as possible.</p>
            <button class="btn btn-secondary">Find Out More</button>
          </div>
          <div class="col-md-6">
            <h2>Owners</h2>
            <p>At In Residence, we believe that there's no reason for your lifestyle to be interrupted by the administration and practicalities of running, managing and enjoying a second home.</p>
            <button class="btn btn-tertiary">Find Out More</button>
          </div>
        </div>
      </div>
    </div>

    <div class="contact">
      <div class="container">
        <div class="row">

          <div class="form-container">
            <h3>Contact Us</h3>
            <form action="" novalidate="novalidate">
              <div class="form-group">
                <div class="row">
                  <input type="text" name="name" placeholder="Name" class="form-control">
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <input type="text" name="surname" placeholder="Surname" class="form-control">
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <input type="email" name="email" placeholder="Email Address" class="form-control">
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <input type="tel" name="tel" placeholder="Telephone Number" class="form-control">
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <textarea name="requirements" id="" cols="30" rows="10" placeholder="Requirements" class="form-control"></textarea>
                  <div class="error"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <ul>
          <li>
            <a href="">
              <img src="<?php bloginfo('template_url'); ?>/img/fb-share.png" alt="">
            </a>
          </li>
           <li>
            <a href="">
              <img src="<?php bloginfo('template_url'); ?>/img/twitter-share.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php bloginfo('template_url'); ?>/img/instagram-share.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php bloginfo('template_url'); ?>/img/linkedin-share.png" alt="">
            </a>
          </li>
        </ul>
        <small>&copy; Copyright In Residence 2016. All rights reserved.</small>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  </body>
</html>