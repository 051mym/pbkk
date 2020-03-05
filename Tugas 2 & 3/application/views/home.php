<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("part/head.php") ?>
</head>

<body>
<div id="preloader"></div>

  <?php $this->load->view("part/banner.php") ?>
  <?php $this->load->view("part/header.php") ?>

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Lets Create Art</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
          <img src="<?php echo base_url(); ?>img/about-img.jpg" alt="">
        </div>

        <div class="col-md-6 about-content">
          <h2 class="about-title">We provide great services and ideass</h2>
          <p class="about-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Subscribe For Updates</h3>
          <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="#">Subscribe Now</a>
        </div>
      </div>
    </div>
  </section>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <?php $this->load->view("part/footer.php") ?>

  <!-- Required JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/morphext/morphext.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>lib/stickyjs/sticky.js"></script>
  <script src="<?php echo base_url(); ?>lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo base_url(); ?>js/custom.js"></script>

  <!-- <script src="contactform/contactform.js"></script> -->


</body>

</html>
