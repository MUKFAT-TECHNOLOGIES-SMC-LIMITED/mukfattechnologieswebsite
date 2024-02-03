<!DOCTYPE html>
<html lang="en">

<?php include 'major/head.php'; ?>

<body class="page-contact">

  <!-- ======= Header ======= -->
  <?php include 'major/otherheader.php'; ?><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Booking</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li id="bookingtitle">Booking</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>nasser business center , Nasser road kampala  uganda</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>sales@mukfattechnologies.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+256760266034</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form id="bookingform" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="clientcontact" id="clientcontact" placeholder="Your contact" required>
                </div>
              </div>

              <div class="form-group mt-3">
              <input type="email" class="form-control" name="company" id="company" placeholder="Your organisation " required>
              </div>

              <div class="form-group mt-3">
                <select type="text" class="form-control"  name="service" id="service" required>
                  <option value="">service</option>
                  <option>website development</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message"  id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div id="messagearea" style="display:none; color: #fff; background: #df1529; text-align: left; padding: 15px; font-weight: 600;">for some reason there is failure to make your booking please retry later</div>
               
              </div>
              <div class="text-center"><button onclick="booknow()" id="booknowbutton" type="button">Send Message</button></div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include 'major/footer.php'; ?><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <?php include 'major/scripts.php';?>

</body>

</html>