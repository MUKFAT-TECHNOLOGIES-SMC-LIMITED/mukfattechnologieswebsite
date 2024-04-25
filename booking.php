<!DOCTYPE html>
<html lang="en">

<?php include 'major/head.php'; ?>

<body class="page-contact">

  <!-- ======= Header ======= -->
  <?php include 'major/otherheader.php'; ?><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('files/otherheader/4.webp');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Booking</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li id="bookingtitle">Booking</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section style="background-color: #001f3f;" id="contact" >
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i style="color:white;" class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4 style="color:white;">Location:</h4>
                <p style="color:white;"> Nkrumah road - kampala  uganda</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i style="color:white;" class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4 style="color:white;">Email:</h4>
                <p style="color:white;">sales@mukfattechnologies.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i style="color:white;" class="bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h4 style="color:white;">whatsapp:</h4>
                <p style="color:white;">+256760266034</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form id="bookingform" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text"  class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="clientcontact" id="clientcontact" placeholder="Your contact" required>
                </div>
              </div>

              <div class="form-group mt-3">
              <input type="text" class="form-control" name="company"  placeholder="Your organisation " required>
              </div>

              <div class="form-group mt-3">
                <select type="text" class="form-control"   name="service" required>
                  <option value="">service</option>
                  <option>website development</option>
                  <option>software support </option>
                  <option>software development </option>
                  <option>mobile app development </option>
                  <option>cloud services </option>
                  <option>network setup and configuration </option>
                  <option>office phone system </option>
                  <option>cyber security and disaster recovery </option>
                  <option>backup solutions and data managment </option>
                  <option>repair services </option>
                  <option>computer training </option>
                  <option>IT consulting  </option>
                  <option>videography & photography </option>
                  <option>digital marketing </option>
                  <option>managed IT services </option>
                  <option>IT automation and monitoring </option>
                  <option>help desk </option>
                  <option>IT project management </option>
                  <option>email services </option>
                  <option>hardware procurement </option>
                  
                </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message"   rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                
                
               
              </div>
              <div class="text-center"><button  id="booknowbutton" type="button">ORDER</button></div>
            </form>

            <div id="messagearea" ></div>

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


  <script>
document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("bookingform");
    var submitButton = document.getElementById("booknowbutton");
    var messageArea = document.getElementById("messagearea"); // Get reference to the message area div

    submitButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent form submission

        // Check if form data is null
        if (formIsValid()) {
            // Prepare form data
            var formData = new FormData(form);

            // Change button text to "Submitting Order"
            submitButton.innerText = "Submitting Order";

            // Send AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "backend/gmail.php", true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Success, display success message in messageArea div
                    messageArea.style.color = "green";
                    messageArea.style.background = "#8BC34A"; // Green background
                    messageArea.innerText = "Your booking has been submitted successfully!";
                    form.reset(); // Clear the form
                } else {
                    // Error, display error message in messageArea div
                    messageArea.style.color = "#fff";
                    messageArea.style.background = "#df1529"; // Red background
                    messageArea.innerText = "An error occurred. Please try again later.";
                }
                // Change button text back to "Order"
                submitButton.innerText = "Order";
            };
            xhr.onerror = function () {
                // Error, display error message in messageArea div
                messageArea.style.color = "#fff";
                messageArea.style.background = "#df1529"; // Red background
                messageArea.innerText = "An error occurred. Please try again later.";
                // Change button text back to "Order"
                submitButton.innerText = "Order";
            };
            xhr.send(formData);
        }
    });

    // Function to validate form data
    function formIsValid() {
        var name = form.elements["name"].value;
        var company = form.elements["company"].value;
        var contact = form.elements["contact"].value;
        var service = form.elements["service"].value;
        var message = form.elements["message"].value;
        var email = form.elements["email"].value;

        if (!name || !company || !contact || !service || !message || !email) {
            // Display error message
            messageArea.style.color = "#fff";
            messageArea.style.background = "#df1529"; // Red background
            messageArea.innerText = "Please fill in all fields.";
            return false;
        }
        return true;
    }
});



</script>

</body>

</html>