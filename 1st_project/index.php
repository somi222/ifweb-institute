<?php include('links.php') ?>
<?php 
  if(!isset($_COOKIE['login'])){
    h('login.php');
  }
  $get_user_q='SELECT * FROM signup WHERE signup_id="'.$_COOKIE['login'].'"';
  $get_user_run=mysqli_query($con,$get_user_q);
  $get_user=mysqli_fetch_assoc($get_user_run);

?>
<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>
<!-- Wrap -->
<div id="wrap"> 
  <!-- header -->
  <header>
    <div class="sticky">
      <div class="container"> 
        <!-- Logo -->
        <div class="logo"> <a href="index.html"><img class="img-responsive" src="images/logo.png" alt="" ></a> </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>
          <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
              <li class="active"> <a href="index.html">Home</a>
              </li>
              <li><a href="mainblog.html">Blog</a>
              </li>
              <li> <a href="aboutus.html">About</a> </li>
              <li> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Platform</a>
              </li>
              <li class="dropdown"> <a href="doctor.php">Doctors</a>
              </li>
              <li> <a href="contact.html">Contact</a> </li>
              <li> <a href="inventory.html">Inventory</a></li>
            </ul>
          </div>
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><img src="<?='upload/'.$get_user['img_name']?>" width="50px" style="margin-top: -15px"></a>
                <ul class="dropdown-menu">
                  <li>
                    <h6>Hi! <?=$get_user['first_name']?></h6>
                  </li>
                  <li><a href="billing.html">Billing</a></li>
                  <li><a href="accountinfo.html">Account_info</a></li>
                  <li><a href="login_action.php?dell=<?=$_COOKIE['login']?>">Sign OUt</a></li>
                </ul>
              </li>
     
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider"> 
    <!-- SLIDE Start -->
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="<?=$url?>assets/images/back.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption font-playfair sfb tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="-200" 
                data-speed="800" 
                data-start="500" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7; font-size:18px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">GET MEDICAL HELP NOW</div>
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfl font-extra-bold tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="-120" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:80px; color:#2d3a4b; text-transform:uppercase; white-space: nowrap;">HASEEB TRUST</div>
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr font-extra-bold tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="0" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:120px; color:#fff; text-transform:uppercase; white-space: nowrap;">HEALTH</div>
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr font-extra-bold tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="110" 
                data-speed="800" 
                data-start="1300" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:120px; color:#fff; text-transform:uppercase; white-space: nowrap;">MATTERS</div>
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-resizeme" 
                data-x="left" data-hoffset="0" 
                data-y="center" data-voffset="240" 
                data-speed="800" 
                data-start="2200" 
                data-easing="Power3.easeInOut" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                data-scrolloffset="0"
                style="z-index: 8;"><a href="#." class="btn">VIST NOW</a> </div>
          </li>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="<?=$url?>assets/images/back2.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr font-regular tp-resizeme letter-space-4" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-50" 
                data-speed="800" 
                data-start="800" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:78px; color:#fff; text-transform:uppercase; white-space: nowrap;">LIVE HEALTHY</div>
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="60" 
                data-speed="800" 
                data-start="1300" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:140px; color:#fff; text-transform:uppercase; white-space: nowrap;">GET HELP </div>
            <!-- LAYER NR. 4 -->
            <div class="tp-caption sfb font-extra-bold tp-resizeme" 
                data-x="center" data-hoffset="120"
                data-y="center" data-voffset="200"
                data-speed="800" 
                data-start="2200" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; font-size:30px; color:#fff; text-transform:uppercase; white-space: nowrap;">RIGHT NOW</div>
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb tp-scrollbelowslider tp-resizeme" 
                data-x="center" data-hoffset="-120" 
                data-y="center" data-voffset="200" 
                data-speed="800" 
                data-start="2200" 
                data-easing="Power3.easeInOut" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                data-scrolloffset="0"
                style="z-index: 8;"><a href="#." class="btn">VISIT</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Content -->
  <div id="content"> 
    <!-- Knowledge Share -->
    <section class="light-gray-bg padding-top-150 padding-bottom-150">
      <div class="container"> 
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>RECENT BLOG POSTS</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</span> </div>
        <div class="knowledge-share">
          <ul class="row">
            <!-- Post 1 -->
            <li class="col-md-6">
              <div class="date"> <span>December</span> <span class="huge">27</span> </div>
              <img src="<?=$url?>assets/images/doc.jpg" width="100%" height="auto" style="padding: 10px">
              <a href="#.">Donec commo is vulputate</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere, diam</p>
              <span>By <strong>Admin</strong></span> </li>
            <!-- Post 2 -->
            <li class="col-md-6">
              <div class="date"> <span>December</span> <span class="huge">09</span> </div>
              <img src="<?=$url?>assets/images/doc.jpg" width="100%" height="auto" style="padding: 10px">
              <a href="#.">Donec commo is vulputate</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere, diam</p>
              <span>By <strong>Admin</strong></span> </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Testimonial -->
    <section class="testimonial padding-top-100">
      <div class="container">
        <div class="row">
        	<h1 class="text-center" style="padding-bottom: 20px; margin-bottom: 15px">OUR PATIENT REVIEWS</h1>
          <div class="col-sm-6"> 
            <!-- SLide -->
            <div class="single-slide"> 
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
              <!-- Slide -->
              <div class="testi-in"> <i class="fa fa-quote-left"></i>
                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                <h5>john smith</h5>
              </div>
            </div>
          </div>
          <!-- Img -->
          <div class="col-sm-6"> <img class="img-responsive" src="images/doc.jpg" alt=""> </div>
        </div>
      </div>
    </section>
    <!-- About -->
    <section class="small-about padding-top-150 padding-bottom-150">
      <div class="container"> 
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>About Us</h4>
          <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
            eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
        </div>
        <!-- Social Icons -->
        <ul class="social_icons">
          <li><a href="#."><i class="icon-social-facebook"></i></a></li>
          <li><a href="#."><i class="icon-social-twitter"></i></a></li>
          <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
          <li><a href="#."><i class="icon-social-youtube"></i></a></li>
          <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
        </ul>
      </div>
    </section>
    <section class="news-letter padding-top-150 padding-bottom-150">
      <div class="container">
        <div class="heading light-head text-center margin-bottom-30">
          <h4>NEWSLETTER</h4>
          <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
        <form>
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit">SEND ME</button>
        </form>
      </div>
    </section>
  </div>
  <!--======= FOOTER =========-->
  <footer>
    <div class="container"> 
      <!-- ABOUT Location -->
      <div class="col-md-3">
        <div class="about-footer"> <img class="margin-bottom-30" src="images/logo-foot.png" alt="" >
          <p><i class="icon-pointer"></i> Street No. 12, Faisalabad 12, <br>
           Pakistan.</p>
          <p><i class="icon-call-end"></i> 0302709622</p>
          <p><i class="icon-envelope"></i> infohaseebtrust@gmail.com</p>
        </div>
      </div>
      <!-- HELPFUL LINKS -->
      <div class="col-md-3">
        <h6>HELPFUL LINKS</h6>
        <ul class="link">
          <li><a href="#."> Blog</a></li>
          <li><a href="#."> Doctors</a></li>
          <li><a href="#."> Inventory</a></li>
          <li><a href="#."> Platform</a></li>
          <li><a href="#."> Contact</a></li>
          <li><a href="#."> About us </a></li>
        </ul>
      </div>
      <!-- SHOP -->
      <div class="col-md-3">
        <h6>Health Blog</h6>
       <img src="<?=$url?>assets/images/health.jpg" width="100%" height="auto">
      </div>
      <!-- MY ACCOUNT -->
      <div class="col-md-3">
        <h6>MY ACCOUNT</h6>
        <ul class="link">
          <li><a href="#."> Login</a></li>
          <li><a href="#."> My Account</a></li>
          <li><a href="#."> My Cart</a></li>
          <li><a href="#."> Wishlist</a></li>
          <li><a href="#."> Checkout</a></li>
        </ul>
      </div>
      <!-- Rights -->
      <div class="rights">
        <p>©  Haseeb Jutt </p>
        <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
      </div>
    </div>
  </footer>
  <!--======= RIGHTS =========--> 
</div>
<?php include('footer.php') ?>