<?php /* Template Name: Contact Us Template */ ?>
  <?php get_header(); ?>

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

    <div class="overview">
      <div class="container">
        <div class="row tiles">
          <div class="col-md-6 tile">
            <p>Premium service for owners of luxury residential properties in Cape Town.</p>
          </div>
          <div class="col-md-6 tile">
            <p>A service that seeks to secure short-term returns from discreet high net worth visitors.</p>
            <h3>Telephone 021 424 5150</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2>Tailor-made Luxury</h2>

            <p>At In Residence, we believe that there’s no reason for 
            your lifestyle to be interrupted by the administration 
            and practicalities of running, managing and enjoying
            a second home.</p>

            <p>That’s why we offer a premium service for owners of
            luxury residential properties in Cape Town. A service
            that seeks also to secure short-term returns from 
            discreet high net worth visitors. And in additon 
            ensures that you’re able to make the most of your 
            stay in the Cape.</p>

            <p>After all, we believe that, to be enjoyed to the full, life
            should be effortless. Don’t you?</p>

            <img src="<?php bloginfo('template_url'); ?>/img/signature.png" alt="signature">
          </div>
          <div class="col-md-5">
            <img src="<?php bloginfo('template_url'); ?>/img/tailor-made.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        $('body').addClass('contact-us');
      });  
    </script>

<?php get_footer(); ?>