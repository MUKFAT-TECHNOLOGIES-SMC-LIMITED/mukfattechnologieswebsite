<!DOCTYPE html>
<html lang="en">

<?php include 'major/head.php'; ?>

<body class="page-services"> 

  <!-- ======= Header ======= -->
  <?php include 'major/otherheader.php'; ?><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('files/otherheader/1.webp');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Services</h2>
        <ol>
          <li><a href="index.php">Home</a></li> 
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

  

    <!-- ======= Services Cards Section ======= -->
    <section style="background-color: #001f3f;" id="services-cards" class="services-cards">
     
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <!-- End Card Item -->

          <?php
          // Fetch data from the table
          $query = "SELECT  name,description,serviceimage FROM services where onlinestatus = 1   ";
          $result = mysqli_query(connection(), $query);
          $response="";
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              $counter = 0;
              while ($row = mysqli_fetch_assoc($result)) {
                $counter += 100;
                $response.='
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="'.$counter.'">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5"> 
                  <img style="width:300px; height: 100px;" class="card-bg" src="'.$row['serviceimage'].'">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">'.$row['name'].'</h4>
                    <p>'.$row['description'].'</p>
                  </div>
                </div>
              </div>
            </div>
          </div>';     
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>





         



        </div>

      </div>
    </section><!-- End Services Cards Section -->

    <!-- ======= Testimonials Section ======= -->
    <section style="background-color: #47aeff;" id="testimonials" class="testimonials">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Testimonials</h2>
    </div>

    <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Exceptional service and innovative solutions! Mukfat Technologies SMC Ltd delivered a project that exceeded our expectations. Their commitment to quality and attention to detail are truly commendable.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/african-avatar-1.webp" class="testimonial-img" alt="African Avatar">
              <h3>Oluwafemi Adegoke</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Mukfat Technologies SMC Ltd stands out in delivering timely and creative solutions. Their team's dedication to excellence and professionalism is truly impressive. It was a pleasure working with them.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/african-avatar-2.webp" class="testimonial-img" alt="African Avatar">
              <h3>Zainab Abimbola</h3>
              <h4>Designer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Mukfat Technologies SMC Ltd demonstrated unparalleled expertise in our project. Their proactive approach and commitment to client satisfaction make them a trusted partner. Highly recommended.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/african-avatar-3.webp" class="testimonial-img" alt="African Avatar">
              <h3>Oluwakemi Olufemi</h3>
              <h4>Store Owner</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Mukfat Technologies SMC Ltd delivered beyond our expectations. Their attention to detail and commitment to excellence set them apart. A reliable partner for any engineering and technology needs.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/african-avatar-4.webp" class="testimonial-img" alt="African Avatar">
              <h3>Jabari Nzube</h3>
              <h4>Freelancer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Mukfat Technologies SMC Ltd is a team of dedicated professionals who go the extra mile. Their commitment to quality, combined with their innovative approach, makes them a standout choice. Excellent service!
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/african-avatar-5.webp" class="testimonial-img" alt="African Avatar">
              <h3>Amaechi Onyeka</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>
<!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'major/footer.php'; ?><!-- End Footer --><!-- End Footer -->

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