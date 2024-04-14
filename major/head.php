
<?php
// Start or resume session
session_start();

include 'backend/database.php';

// Check if visit has already been recorded during this session
if (!isset($_SESSION['visit_recorded'])) {
  

    // Create connection
    $conn =  connection();

   

    // Prepare SQL statement to insert visit into database
    $sql = "INSERT INTO visits (website,visit_time) VALUES (1,NOW())";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        
        
        // Mark visit as recorded in session to prevent duplicates
        $_SESSION['visit_recorded'] = true;
    } 

    // Close database connection
    $conn->close();
}
?>



<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MUKFAT TECHNOLOGIES SMC LTD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.webp" rel="icon">
  <link href="assets/img/logo.webp" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>