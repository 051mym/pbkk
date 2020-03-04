  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="<?php echo base_url(); ?>img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li> <?php echo anchor('home', 'Home');  ?> </li>
          <li> <?php echo anchor('services', 'Services');  ?> </li>
          <li> <?php echo anchor('about', 'About');  ?> </li>
          <!-- <li><a href="<?php echo site_url('home') ?>"> Home</a></li> -->
          
          <li class="menu-has-children"><a href="">Tugas</a>
            <ul>
              <li> <?php echo anchor('#', 'Tugas 1'); ?> </li>
              <li> <?php echo anchor('tugas2', 'Tugas 2'); ?> </li>
            </ul>
          </li>


         
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
