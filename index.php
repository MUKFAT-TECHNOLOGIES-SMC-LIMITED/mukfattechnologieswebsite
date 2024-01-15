<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <style>
    .swiper-container {
      width: 100%;
      height: 50vh;
    }

    .swiper-slide {
      position: relative;
      width: 100%;
      height: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .carousel-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .blur-overlay {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 25%; /* Adjust the height for the blurred area */
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.9));
      filter: blur(10px); /* Adjust the blur intensity as needed */
      pointer-events: none;
    }

    .carousel-text {
      position: absolute;
      bottom: 20px; /* Adjust the bottom position for the text */
      text-align: center;
      color: #fff;
      width: 100%;
      z-index: 1; /* Ensure text is above the blur overlay */
    }

    .carousel-text h1 {
      font-size: 2.5em;
      margin: 0;
      color: white;
    }
  </style>

<?php include 'major/head.php'; ?>

<body class="page-index">

  <!-- ======= Header ======= -->
  <?php include 'major/header.php'; ?><!-- End Header -->





  <main id="main">

  <section id="hero" class=" d-flex align-items-center">


<div class="swiper-container">
  <div class="swiper-wrapper">
    <!-- Slides -->




    <div class="swiper-slide">
              <img src="assets/img/2.jpg" alt="Slide 1" class="carousel-image">
              <div class="blur-overlay"></div>
              <div style="color: white;" class="carousel-text">
                 <p class="animate__animated animate__fadeInDown">fgfgfg</p>
                      <h2 class="animate__animated animate__fadeInUp">gfgfg</h2>
                      
                    </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/img/2.jpg" alt="Slide 2" class="carousel-image">
              <div class="blur-overlay"></div>
              <div style="color: white;" class="carousel-text">
                 <p class="animate__animated animate__fadeInDown">fgfgfg</p>
                      <h2 class="animate__animated animate__fadeInUp">gfgfg</h2>
                      
                    </div>
            </div>




    
    <!-- Add more slides as needed -->
  </div>
  <!-- Add Pagination -->
 
  <!-- Add Navigation -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    //autoplay: {
    //delay: 5000, // Adjust the delay in milliseconds (e.g., 5000ms = 5 seconds)
  //},
  });
</script>


 
</section><!-- End Hero -->














 

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>
          <p> is a leading provider of IT services and solutions for businesses and individuals.
            It was founded with the goal of helping our clients to achieve their business goals by leveraging the latest technology. 
            We offer a wide range of services, including software & hardware services, cloud services, network services, and more.</p>
        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/2.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Client-Centric Approach</h3>
                    <h4 class="mb-3">Your Needs Always Come First.</h4>
                    <p>At mukfat technologies, our clients are at the heart of everything we do. We understand that each case is unique, and we are committed to providing personalized solutions that address your specific legal concerns. Our attorneys take the time to listen to your story, understand your objectives, and guide you through every step of the legal process. With Tenax Advocates, you can trust that your needs will be our top priority, and we'll work tirelessly to protect your rights and achieve the best possible outcome.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Experienced and Skilled Attorneys</h3>
                    <h4 class="mb-3">Knowledge You Can Rely On.</h4>
                    <p>Our team of highly experienced enginners brings a wealth of technology knowledge and a proven track record of success. With years of practice in diverse areas of IT, we have handled a wide range of cases, from straightforward to highly complex matters. When you choose mukfat technologies, you are gaining the advantage of skilled enginers and computer scientists who know how to navigate the technology  landscape effectively. Rest assured, your case will be in the hands of competent and zealous tech experts who are dedicated to achieving the best results for you..</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Results-Driven Advocacy</h3>
                    <h4 class="mb-3">Your Success is Our Mission.</h4>
                    <p>At Tenax Advocates, we are committed to delivering results that matter to you. Our unwavering dedication to achieving favorable outcomes for our clients is what sets us apart. Whether it's securing a fair settlement in a civil dispute, protecting your interests in a family law matter, or mounting a robust defense in a criminal case, we approach every challenge with a strategic mindset and unwavering determination. Your success is our mission, and we won't rest until we've fought tirelessly for your rights and achieved the best resolution possible.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Trusted Reputation and Client Satisfaction</h3>
                    <h4 class="mb-3">Testimonials Speak for Themselves.</h4>
                    <p>We take great pride in the trust we have earned from our clients over the years. Our commitment to providing exceptional legal services and compassionate support has resulted in numerous satisfied clients who have benefited from our representation. Don't just take our word for it – our clients' testimonials and positive reviews are a testament to our dedication to excellence. When you choose Tenax Advocates, you are choosing a law firm that has built a solid reputation for its professionalism, integrity, and successful outcomes. Let us be your advocates in the pursuit of justice and the protection of your rights.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">cloud computing</a></h4>
              <p class="description">Unlocking business potential with flexible and secure cloud computing solutions.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">software development</a></h4>
              <p class="description">Efficient web solutions through state-of-the-art web application development.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">networking</a></h4>
              <p class="description">Ensuring reliable network performance through professional installation and maintenance. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">website development</a></h4>
              <p class="description">Empowering businesses with professional, cutting-edge website development</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">mobile development</a></h4>
              <p class="description">Creating seamless mobile experiences through expert app development.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">digital marketing </a></h4>
              <p class="description">Enhancing brand visibility and reach through strategic digital marketing campaigns</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Book Your Free Consultation Now</h3>
            <p>Ready to enhance your tech and achieve favorable increadible outcomes? Take the first step towards a successful resolution by scheduling your free consultation today. Our experienced engineers are standing by to listen to your concerns, analyze your case, and provide personalized tech guidance tailored to your needs. Don't wait, let mukfat technologies smc ltd be your trusted tech ally on this journey. Click below to book your free consultation now.</p>
            <a class="cta-btn" href="contact.php">BOOK</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Powerful Features for <br>Mukfat Technologies</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <span>cloud computing</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                  <span>software development </span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <span>networking</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <span>hardware sales</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-database-2-line" style="color: #47aeff;"></i>
                  <span>media</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                  <span>digital marketing</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <span>Compassionate Approach</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-base-station-line" style="color: #ff5828;"></i>
                  <span>Responsive Communication</span>
                </div>
              </div><!-- End Icon List Item-->
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="assets/img/4.jpg" alt="Image" class="img-fluid">
              <img src="assets/img/5.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>Begin Your Tech Journey <br>Today</h4>
              <p>Ready to take the first step towards resolving your legal matter? Get started now by scheduling your free consultation with Mukfat Technologies smc ltd. Our experienced team is here to listen to your concerns, offer expert advice, and develop a personalized tech strategy tailored to your unique needs. Don't delay, let our trusted engineerss guide you through this process with confidence and determination. Click below to start your journey towards a successful resolution."</p>
              <a href="contact.php" class="btn-get-started">BOOK NOW</a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section 
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Most active services</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Navigating Divorce:</h3>
              <p> Tips for a Smooth Transition and Protecting Your Interests...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">The Importance of Estate Planning</h3>
              <p>Safeguarding Your Assets and Legacy...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Understanding DUI Defense Strategies</h3>
              <p>Your Rights and Legal Options...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, Sep 16</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Business Legal Matters</h3>
              <p>From Startups to Contracts - A Comprehensive Guide...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= --><?php include 'major/footer.php'; ?>
  <!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>