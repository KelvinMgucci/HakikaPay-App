<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hakika Pay - Secure and Reliable Payments</title>
  <meta name="description" content="Hakika Pay is your trusted escrow and payment platform built for transparency and security.">
  <meta name="keywords" content="Hakika Pay, escrow, payments, Tanzania, secure payments, online transactions">

  <!-- Favicons -->
  <link href="assets/img/hakikapay-favicon.png" rel="icon">
  <link href="assets/img/hakikapay-apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing_assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('landing_assets/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Hakika Pay Platform
  * Customized from Appland Template by BootstrapMade
  * Last Updated: April 2025
  * Developed for Hakika Pay - https://hakikapay.com
  ======================================================== -->
</head>


<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
  
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment and add your logo if available -->
        <!-- <img src="assets/img/hakikapay-logo.png" alt="Hakika Pay Logo"> -->
        <h1 class="sitename">Hakika Pay</h1>
      </a>
  
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#faq">F.A.Q</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  
      <a class="btn-getstarted" href="{{ route('login') }}">Get Started</a>


  
    </div>
  </header>
  
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('landing_assets/assets/img/hero-img.png')}}" class="img-fluid animated" alt="Secure Escrow Payments">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center text-center text-md-start" data-aos="fade-in">
            <h2>Secure Escrow Payments<br><span>Made Simple</span></h2>
            <p>Hakika Pay is your trusted platform for secure, transparent, and reliable transactions between buyers and sellers—anytime, anywhere.</p>
            <div class="d-flex mt-4 justify-content-center justify-content-md-start">
              <a href="#" class="download-btn"><i class="bi bi-google-play"></i> <span>Google Play</span></a>
              <a href="#" class="download-btn"><i class="bi bi-apple"></i> <span>App Store</span></a>
            </div>
          </div>
        </div>
      </div>
    
    </section><!-- /Hero Section -->
    

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Hakika Pay</h2>
        <p>Secure and Transparent Escrow Payments for Every Transaction</p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row gy-4">
    
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Hakika Pay bridges the trust gap in online transactions by acting as a secure third party. Whether you're buying, selling, or partnering online, we ensure that payments are protected and only released when all conditions are met.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Safe and secure escrow payment system.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Real-time transaction tracking and updates.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Ideal for freelancers, buyers, sellers, and marketplaces.</span></li>
            </ul>
          </div>
    
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>With Hakika Pay, you can confidently engage in digital transactions without fear of scams or payment issues. Our platform empowers trust in every deal—big or small. Join thousands who already transact the smarter, safer way.</p>
            <a href="#features" class="read-more"><span>Explore Features</span><i class="bi bi-arrow-right"></i></a>
          </div>
    
        </div>
    
      </div>
    
    </section><!-- /About Section -->
    

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Key Features</h2>
        <p>Everything you need to build trust and secure your transactions with confidence.</p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row gy-5">
    
          <div class="col-xl-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('landing_assets/assets/img/features.svg')}}" class="img-fluid" alt="Hakika Pay Features">
          </div>
    
          <div class="col-xl-7 d-flex" data-aos="fade-up" data-aos-delay="200">
    
            <div class="row align-self-center gy-5">
    
              <div class="col-md-6 icon-box">
                <i class="bi bi-shield-check"></i>
                <div>
                  <h4>Secure Escrow Payments</h4>
                  <p>Funds are held safely in escrow and only released when both parties meet the agreement.</p>
                </div>
              </div><!-- End Feature Item -->
    
              <div class="col-md-6 icon-box">
                <i class="bi bi-phone"></i>
                <div>
                  <h4>Mobile First</h4>
                  <p>Manage all your transactions on-the-go with our mobile-optimized platform.</p>
                </div>
              </div><!-- End Feature Item -->
    
              <div class="col-md-6 icon-box">
                <i class="bi bi-clock-history"></i>
                <div>
                  <h4>Real-Time Tracking</h4>
                  <p>Monitor payment status, delivery, and confirmations in real-time from any device.</p>
                </div>
              </div><!-- End Feature Item -->
    
              <div class="col-md-6 icon-box">
                <i class="bi bi-people"></i>
                <div>
                  <h4>Built for Everyone</h4>
                  <p>Ideal for freelancers, businesses, and marketplaces. No technical skills needed.</p>
                </div>
              </div><!-- End Feature Item -->
    
              <div class="col-md-6 icon-box">
                <i class="bi bi-cash-stack"></i>
                <div>
                  <h4>Multiple Payment Options</h4>
                  <p>Send or receive payments via mobile money, bank transfer, or wallet balance.</p>
                </div>
              </div><!-- End Feature Item -->
    
              <div class="col-md-6 icon-box">
                <i class="bi bi-check2-square"></i>
                <div>
                  <h4>Dispute Resolution</h4>
                  <p>Fair and transparent dispute handling in case of transaction disagreements.</p>
                </div>
              </div><!-- End Feature Item -->
    
            </div>
    
          </div>
    
        </div>
    
      </div>
    
    </section><!-- /Features Section -->
  

<!-- Feature Details Section -->
<section id="feature-details" class="feature-details section">

  <div class="container">

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
        <img src="{{ asset('landing_assets/assets/img/features-1.png')}}" class="img-fluid" alt="Secure Escrow Payment">
      </div>
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
        <h3>Secure Escrow Payments</h3>
        <p class="fst-italic">
          All transactions are held securely until both the buyer and seller meet the agreed terms.
        </p>
        <ul>
          <li><i class="bi bi-check"></i><span>Funds are released only when both parties confirm satisfaction.</span></li>
          <li><i class="bi bi-check"></i> <span>Eliminates fraud by holding money in trust during deals.</span></li>
          <li><i class="bi bi-check"></i> <span>Ideal for online marketplaces, freelancers, and delivery-based services.</span></li>
        </ul>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('landing_assets/assets/img/features-2.png')}}" class="img-fluid" alt="Multiple Payment Options">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
        <h3>Flexible Payment Options</h3>
        <p class="fst-italic">
          Whether you prefer mobile money, bank transfers, or wallet balances, we’ve got you covered.
        </p>
        <p>
          Hakika Pay supports all major Tanzanian mobile money services, giving users seamless control of their financial flow. Choose how you send and receive funds with maximum flexibility and convenience.
        </p>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
        <img src="{{ asset('landing_assets/assets/img/undraw_deliveries_2m9t.png')}}" class="img-fluid" alt="Track Transaction Status">
      </div>
      <div class="col-md-7" data-aos="fade-up">
        <h3>Real-Time Tracking & Updates</h3>
        <p>
          Transparency is at the heart of Hakika Pay. Users are notified at every stage of the transaction.
        </p>
        <ul>
          <li><i class="bi bi-check"></i> <span>Track every step from initiation to completion.</span></li>
          <li><i class="bi bi-check"></i><span> Get instant notifications via SMS and in-app alerts.</span></li>
          <li><i class="bi bi-check"></i> <span>Stay informed, reduce disputes, and build trust.</span></li>
        </ul>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
        <img src="{{ asset('landing_assets/assets/img/features-4.png')}}" class="img-fluid" alt="Dispute Resolution">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
        <h3>Dispute Resolution Built-In</h3>
        <p class="fst-italic">
          Transactions don’t always go as planned—we’re here to help when they don’t.
        </p>
        <p>
          Our support team mediates and resolves issues fairly and efficiently to protect both buyers and sellers. Hakika Pay ensures confidence in every transaction with impartial dispute handling.
        </p>
      </div>
    </div><!-- Features Item -->

  </div>

</section><!-- /Feature Details Section -->


<!-- Faq Section -->
<section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Get answers to some of the most common questions about Hakika Pay</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-8">

        <div class="faq-container">

          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>What is Hakika Pay?</h3>
            <div class="faq-content">
              <p>Hakika Pay is a secure digital payment platform that allows businesses and individuals to send, receive, and manage payments effortlessly. With Hakika Pay, you can make payments instantly, securely, and conveniently from anywhere.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>How do I sign up for Hakika Pay?</h3>
            <div class="faq-content">
              <p>Signing up for Hakika Pay is simple! Just visit our website, click the "Sign Up" button, and follow the prompts to create an account. You’ll need to provide basic details like your name, email address, and phone number.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Is Hakika Pay secure?</h3>
            <div class="faq-content">
              <p>Yes, Hakika Pay uses advanced encryption technologies to ensure the security of all transactions. We take data protection very seriously and continuously improve our security measures to keep your payments safe.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>What types of payments can I make with Hakika Pay?</h3>
            <div class="faq-content">
              <p>Hakika Pay allows you to make a variety of payments including online purchases, utility bill payments, peer-to-peer transfers, and more. You can also use Hakika Pay to pay for services such as subscriptions or mobile recharge.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Can I link my bank account to Hakika Pay?</h3>
            <div class="faq-content">
              <p>Yes! You can easily link your bank account to Hakika Pay to withdraw or deposit funds. Simply navigate to your account settings and follow the steps to link your bank account.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div>

    </div>

  </div>

</section><!-- /Faq Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

     <!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact Us</h2>
  <p>If you have any questions or need support, feel free to reach out to us!</p>
</div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Shaban Robert Street</p>
                  <p>Dar Es Salaam</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+255 765 803 833</p>
                  <p>+255 756 992 683</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>kelvinmghi@yahoo.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>



        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Stay up to date with the latest updates and offers from Hakika Pay!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email" placeholder="Enter your email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Thank you for subscribing to our newsletter!</div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Hakika Pay</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Shabaan Robert</p>
            <p>Dar es Salaam, Tanzania</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+255 621 704 554</span></p>
            <p><strong>Email:</strong> <span>support@hakikapay.com</span></p>
          </div>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About Us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a></li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Mobile Payments</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Delivery Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Money Transfers</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Mobile Top-up</a></li>
          </ul>
        </div>
  
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Stay connected with us for the latest news and updates.</p>
          <div class="social-links d-flex">
            <a href="https://twitter.com/HakikaPay" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://facebook.com/HakikaPay" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/HakikaPay" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/company/HakikaPay" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
      </div>
    </div>
  
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Hakika Pay</strong> <span>All Rights Reserved</span></p>
    </div>
  
  </footer>
  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('landing_assets/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('landing_assets/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('landing_assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('landing_assets/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('landing_assets/assets/js/main.js')}}"></script>

</body>

</html>