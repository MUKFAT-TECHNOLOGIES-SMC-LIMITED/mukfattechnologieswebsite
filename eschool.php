<!DOCTYPE html>
<html lang="en">

<?php include 'major/head.php'; ?>

<body class="page-services">

  <!-- ======= Header ======= -->
  <?php include 'major/otherheader.php'; ?><!-- End Header -->

  <main id="main">

  

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('files/otherheader/5.webp');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>ESCHOOL</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>ESCHOOL</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section style="background-color: #47aeff;" id="blog" class="blog">
      <div  class="container" data-aos="fade-up">

        <div class="row g-5">

          <div style="background-color: #001f3f; color: white;" class="col-lg-10" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              

             

              <div  class="content">




              


 <?php
          // Fetch data from the table
          $query = "SELECT  id,title,description,image,detailtype FROM productdetails where product = 1 ";
          $result = mysqli_query(connection(), $query);
          $response="";
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              $counter = 0;
              while ($row = mysqli_fetch_assoc($result)) {

                if($row['detailtype']=='blockquote'){
                  $response.='
                  <blockquote>
                  <p style="color: white;">
                  '.$row['description'].'
                  </p>
                </blockquote>
                  ';

                }else if($row['title']){
                  $response.='
                  <img src="'.$row['image'].'" class="img-fluid" alt="">
                <h3 id="'.$row['id'].'">'.$row['title'].'</h3>
                <p>
                '.$row['description'].'
                </p>
                  ';
                }else{
                  $response.='
                  
                <p>
                '.$row['description'].'
                </p>
                  ';
                }   
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>




             



               







              </div><!-- End post content -->



























              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

           

            <div class="comments">

              <h4 class="comments-count">Comments</h4>

              

              

              <?php
          // Fetch data from the table
          $query = "SELECT id as primaryid, name,email,commentorposition,comment,creationdate FROM productcomments   ";
          $result = mysqli_query(connection(), $query);
          $response="";
          
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              while ($row = mysqli_fetch_assoc($result)) {
                $response.='';
                $response.='<div style="background-color:white;" id="comment-'.$row['primaryid'].'" class="comment">';
                $response.='
                <div class="d-flex">
                <div class="comment-img"><img src="files/1.jpg" alt=""></div>
                <div>
                  <h5><a href="">'.$row['name'].'</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                  <time datetime="'.$row['creationdate'].'">01 Jan,2022</time>
                  <p>
                  '.$row['comment'].'
                  </p>
                </div>
              </div>
              '; 

              $response.='<div id="comment-reply-1" class="comment comment-reply">';
              
              $query2 = "SELECT id as secondaryid, name,email,commentorposition,comment,creationdate FROM productcomments where secondarycomment = ".$row['primaryid']."  ";
              $result2 = mysqli_query(connection(), $query2);
              while ($row2 = mysqli_fetch_assoc($result2)) {
                $response.='
                
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">01 Jan,2022</time>
                      <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div><!-- End comment reply #2-->

                
              '; 


              $query2 = "SELECT id, name,email,commentorposition,comment,creationdate FROM productcomments where secondarycomment = ".$row['secondaryid']."  ";
              $result2 = mysqli_query(connection(), $query2);
              while ($row = mysqli_fetch_assoc($result2)) {
                $response.='
                
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">01 Jan,2022</time>
                      <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div><!-- End comment reply #2-->

                
              '; 
              }
              }



              $response.='</div>';
              $response.='</div>'; 
              }
          } else {echo "No comments found ";}
          
          echo($response);
          ?>


               

                

             

             

            

            </div><!-- End blog comments -->

          </div>

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">packages</h3>
                <ul class="mt-3">
                  <li><a href="#admission">starter <span style="display:none;">(25)</span></a></li>
                  <li><a href="#health">basic <span style="display:none;">(12)</span></a></li>
                  <li><a href="#">standard <span style="display:none;">(5)</span></a></li>
                  <li><a href="#">primum <span style="display:none;">(22)</span></a></li>
                 
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">packages</h3>
                <ul class="mt-3">

                <?php
          // Fetch data from the table
          $query = "SELECT  id,title,description,image,detailtype FROM productdetails where product = 1  ";
          $result = mysqli_query(connection(), $query);
          $response="";

          
          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              while ($row = mysqli_fetch_assoc($result)) {

                if($row['title']){
                  $response.=' <li><a href="#'.$row['id'].'">'.$row['title'].'</a></li>'; 
                }
                 
                
              
                
                
              }
          } else {echo "No data found in the table.";}
          
          echo($response);
          ?>
                
                
                </ul>
              </div><!-- End sidebar categories-->


           

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

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