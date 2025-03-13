<!DOCTYPE html>
<html lang="en">



<?php include 'major/head.php'; ?>






<body class="page-index">

  <!-- ======= Header ======= -->
  <?php include 'major/header.php'; ?><!-- End Header -->





  <main id="main">



 <div  id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

  <?php
          // Fetch data from the table
          $query = "SELECT  id FROM websitecousel   ";
          $result = mysqli_query(connection(), $query);
          $response="";
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              while ($row = mysqli_fetch_assoc($result)) {
                 
                $response.='<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$row['id'].'" aria-label="Slide 2"></button>'; 
              
                
                
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>
  </div>
  <div class="carousel-inner">


    <div class="carousel-item active">
      <img src="files/coursel/1.webp" class="d-block w-100" alt="...">
      <div style="background-color: #001f3f;" class="carousel-caption d-none d-md-block">
        <h5>vvv</h5>
        <p>...........</p>
      </div>
    </div>


    <?php
          // Fetch data from the table
          $query = "SELECT  title,description,image FROM websitecousel   ";
          $result = mysqli_query(connection(), $query);
          $response="";
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              while ($row = mysqli_fetch_assoc($result)) {
                 
                $response.='
                
                <div class="carousel-item ">
      <img src="'.$row['image'].'" class="d-block w-100" alt="...">
      <div style="background-color: #001f3f;" class="carousel-caption d-none d-md-block">
        <h5>'.$row['title'].'</h5>
        <p>'.$row['description'].'</p>
      </div>
    </div>
    
    ';     
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>


   
  

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


 







<!-- ======= Our product Section ======= -->
<section  style="background-color: #001f3f;" id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color: white;">OUR CORE VALUES</h2>

        </div>


        <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="files/index/1.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Innovation</h5>
        <p class="card-text"> Pioneering creativity and forward-thinking to redefine tech boundaries.</p>
        
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="files/index/2.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Integrity</h5>
        <p class="card-text"> Upholding honesty, transparency, and ethical standards in all endeavors</p>
        
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="files/index/3.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Collaboration</h5>
        <p class="card-text">Harnessing diverse expertise and teamwork to achieve impactful results</p>
        
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="files/index/4.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Sustainability</h5>
        <p class="card-text">Committing to environmental and social responsibility for a better future</p>
        
      </div>
    </div>
  </div>
</div>
  </div>
</div>




       

      </div>
    </section><!-- End Our products Section -->







 

    <!-- ======= Why Choose Us Section ======= -->
    <section style="background-color: #47aeff;"  id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

       

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" > <img style="width: 100%;height: 531px; " src="files/10.webp" class="img-fluid rounded-start" alt="..."></div>
          <div style="height: 531px;" class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

               



                <?php
          // Fetch data from the table
          $query = "SELECT  title,subtitle,description FROM whychooseus   ";
          $result = mysqli_query(connection(), $query);
          $response="";
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              while ($row = mysqli_fetch_assoc($result)) {
                 
                $response.='
                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">'.$row['title'].'</h3>
                    <h4 class="mb-3">'.$row['subtitle'].'</h4>
                    <p>'.$row['description'].'</p>
                  </div>
                </div>';     
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>

               

        

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>





<br><br><br>


    </section><!-- End Why Choose Us Section -->



 

    <!-- ======= Our Services Section ======= -->
    <section style="background-color: #001f3f;" id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color: white;">Our Services</h2>

        </div>


        <div class="row row-cols-1 row-cols-md-4 g-4">
 



  <?php
          // Fetch data from the table
          $query = "SELECT  name,description,serviceimage FROM services where onlinestatus = 1  ";
          $result = mysqli_query(connection(), $query);
          $response="";
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              $counter = 0;
              while ($row = mysqli_fetch_assoc($result)) {
                $response.='
                
                <div class="col">
                <div class="card h-100">
                  <img style="object-fit: cover; width: 100%; height:300px;" src="'.$row['serviceimage'].'" class="card-img-top" alt="...">
                  <div style="background-color: #47aeff;" class="card-body">
                    <h5 class="card-title">'.$row['name'].'</h5> 
                    <p class="card-text">'.$row['description'].'</p>
                  </div>
                </div>
              </div>
              ';     
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>


</div>




        <section id="call-to-action" >
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
          <a class=" btn btn-primary" href="services.php">SEE MORE SERVICES</a>
          </div>
        </div>

      </div>
    </section>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Book Your Free Consultation Now</h3>
            <p>Ready to enhance your tech and achieve favorable increadible outcomes? Take the first step towards a successful resolution by scheduling your free consultation today. Our experienced engineers are standing by to listen to your concerns, analyze your case, and provide personalized tech guidance tailored to your needs. Don't wait, let mukfat technologies smc ltd be your trusted tech ally on this journey. Click below to book your free consultation now.</p>
            <a style="background-color: #001f3f;" class="cta-btn" href="booking.php">BOOK</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->





      <!-- ======= Our product Section ======= -->
      <section style="background-color: #47aeff;"  id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color: white;">our product innovations</h2>

        </div>


        <div class="row row-cols-1 row-cols-md-4 g-4">




 <?php
          // Fetch data from the table
          $query = "SELECT  name,description,productimage,colour FROM products ";
          $result = mysqli_query(connection(), $query);
          $response="";
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              $counter = 0;
              while ($row = mysqli_fetch_assoc($result)) {
                $response.='

                <div class="col">
                <div class="card h-100">
                  <img src="'.$row['productimage'].'" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">'.$row['name'].'</h5>
                    <p class="card-text">'.$row['description'].'</p>
                  </div>
                  <div class="bg-'.$row['colour'].' card-footer">
                    <a href="eschool.php" style="background-color: white;" class="btn text-muted">read more</a>
                  </div>
                </div>
              </div>
              ';     
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>



</div>




       

      </div>
    </section><!-- End Our products Section -->

    <!-- ======= Features Section ======= -->
    <section style="background-color: #001f3f;"  id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3 style="color: white;">Powerful Features for <br>Mukfat Technologies</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <span>honest</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                  <span>hardworking </span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <span>reliable</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <span>inteligent</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-database-2-line" style="color: #47aeff;"></i>
                  <span>secure</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                  <span>innovative</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <span>motivators</span>
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
              <img style=" width: 500px; height: 300px;" src="files/12.webp" alt="Image" class="img-fluid">
              
            </div>
          </div>
        </div>

      </div>

      <div style="background-color: #47aeff;" class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>A WORD FROM THE FOUNDING DIRECTOR</h4>
              <p>agreat thank you goes to all our customers both new and existing . its my plesure that today you are a apart of mukfat technologies smc ltd . years ago this was a dream that one day i would innovate to motivate ones success both in business and personal activites with the help of technology . however today i will proudly say happy is me and my team creating solutions to what may hinder your success . thank you for supporting our dream and indeed asure you even better results tomorrow</p>
              <a style="background-color: #001f3f;" href="booking.php" class="btn-get-started">BOOK NOW</a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section 
    <section   id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color: white;">research department publication</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
           
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Navigating Divorce:</h3>
              <p> Tips for a Smooth Transition and Protecting Your Interests...</p>
              <a href="blog-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">The Importance of Estate Planning</h3>
              <p>Safeguarding Your Assets and Legacy...</p>
              <a href="blog-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Understanding DUI Defense Strategies</h3>
              <p>Your Rights and Legal Options...</p>
              <a href="blog-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-4.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, Sep 16</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Business Legal Matters</h3>
              <p>From Startups to Contracts - A Comprehensive Guide...</p>
              <a href="blog-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> - End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= --><?php include 'major/footer.php'; ?>
  <!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <?php include 'major/scripts.php'; ?>

</body>

</html>