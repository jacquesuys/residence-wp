<?php /* Template Name: About Us Template */ ?>
  <?php get_header(); ?>

    <!-- Carousel
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
          <img class="first-slide" src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="Third slide">
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
            <p>Premium service for owners of luxury residential properties in Cape Town.</p>
          </div>
          <div class="col-md-6 tile">
            <p>A service that seeks to secure short-term returns from discreet high net worth visitors.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="about">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2>About in Residence</h2>

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

            <img src="<?php bloginfo('template_url'); ?>/img/signature.png" alt="signature">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="<?php bloginfo('template_url'); ?>/img/about-1.jpg" alt="">
          </div>
          <div class="col-md-6">
            <img src="<?php bloginfo('template_url'); ?>/img/about-2.jpg" alt="">
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

    <script type="text/javascript">
      $(document).ready(function(){
        $('body').addClass('about-us');
      });  
    </script>

<?php get_footer(); ?>