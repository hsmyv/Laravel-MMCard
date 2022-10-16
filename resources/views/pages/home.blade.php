
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>HSTUDIO</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="/assets/css/animated.css">
    <link rel="stylesheet" href="/assets/css/owl.css">


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.20s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>HSTUDIO<img src="/assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Social Medias</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
              @auth
              <li class="scroll-to-section"><div class="main-blue-button"><a href='{{route('showuserprofile', auth()->user()->userinformation->username)}}'>{{auth()->user()->userinformation->username}}</a></div></li>
              @else
              <li class="scroll-to-section"><div class="main-blue-button"><a href='{{route('showuserprofile',  $userinformation->username ?? 'None')}}'>Login</a></div></li>
              @endauth
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Agency Status:</h6>
                      <h4>Ready Work</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Accounts:</h6>
                      <h4>4587</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Visitors</h6>
                      <h4>2504/Daily</h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2>Share Your Social Media Profiles by scan QR code</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                        @auth
                        <a href='{{route('showuserprofile',  $userinformation->username ?? 'None')}}'>Account</a>
                        @else
                        <a href='{{route('showuserprofile',  $userinformation->username ?? 'None')}}'>Login</a>
                        @endauth
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>Top <em>marketing</em> agency &amp; consult your website <span>with us</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>750+</h4>
                <h6>projects finished</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>340+</h4>
                <h6>happy clients</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>128+</h4>
                <h6>awards</h6>
              </div>
            </div>
          </div>
          <p><a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent">SEO Dream</a> is free digital marketing CSS template provided by TemplateMo website. You are allowed to use this template for your business websites. Please DO NOT redistribute this template ZIP file on any Free CSS collection websites. You may contact us for more information. Thank you.</p>
          <div class="main-green-button"><a href="#">Discover company</a></div>
        </div>
      </div>
    </div>
  </div>



  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Social Medias</h6>
            <h2>Share Social<em> Medias Profiles</em> on <span> Your Account</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/facebook.avif" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Facebook</h4></a>
                      <span>view</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/instagram.avif" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Instagram</h4></a>
                      <span>view</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/youtube.avif" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Youtube</h4></a>
                      <span>view</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/whatsapp.avif" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <h4>Whatsapp</h4>
                      <a href="#"><span>view</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="/assets/images/spotify.avif" alt="">
                    <div class="hover-content">
                      <div class="inner-content">
                        <a href="#"><h4>Spotify</h4></a>
                        <span>Branding</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="/assets/images/netflix.avif" alt="">
                    <div class="hover-content">
                      <div class="inner-content">
                        <a href="#"><h4>Netflix</h4></a>
                        <span>Artwork</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/facebook.avif" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Facebook</h4></a>
                      <span>Branding</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/tiktok.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Tiktok</h4></a>
                      <span>Artwork</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/twitter.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Twitter</h4></a>
                      <span>Creative</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="/assets/images/linkedin.avif" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Linkedin</h4></a>
                      <span>Consulting</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Contact Us</h6>
                  <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">info@company.com</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">+001-002-0034</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">26th Street, Digital Villa</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021 SEO Dream Co., Ltd. All Rights Reserved.

          <br>Web Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/animation.js"></script>
  <script src="/assets/js/imagesloaded.js"></script>
  <script src="/assets/js/custom.js"></script>

</body>
</html>


