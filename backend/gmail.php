
<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'database.php';
 // Load PHPMailer library
 require '../vendor/autoload.php';
// PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Function to send email
function sendConfirmationEmail($name, $email, $service, $message,$contact,$caller) {
    // Set your email body
    if($caller == 'client'){

        $min = 10000; // Minimum value
$max = 1000000; // Maximum value
$randomNumber = rand($min, $max);

    
    $email_body = "<div style=\"font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; margin: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto;\">
        <div style=\"background-color: #003B9D; color: #fff; padding: 20px; text-align: center; position: relative;\">
            <h1 style=\"margin-bottom: 10px;\"> MUKFAT TECHNOLOGIES SMC LTD </h1>
            <p>head office Kampala, Uganda</p>
            <h4> SALES DEPARTMENT</h4>
        </div>
        <div style=\"background-color: #F04D0C; height: 5px;\"></div> <!-- Blue strip -->
        <div style=\"padding: 20px; background-color: #f2f2f2;\"> <!-- Light grey background -->
            <p>Dear $name,</p>
            <p>Subject: <strong style=\"text-decoration: underline;\">$service  Order request </strong> </p>
            <p> We are writing to confirm the receipt of your booking. Your Booking is now in our system and is being processed by our  team.</p>
            <p>For tracking purposes, your order has been assigned the following order number: $randomNumber This unique identifier will help us efficiently manage and monitor the progress of your booking</p>
            <p>Rest assured, our experienced team is dedicated to delivering high-quality results and ensuring that your order progresses smoothly and efficiently.</p>
            <p>If you have any questions or require further assistance, please feel free to reach out to us. We are here to provide support and address any concerns you may have.</p>
            <p>Thank you for choosing MUKFAT TECHNOLOGIES SMC LTD. We are excited to collaborate with you and bring your order to fruition..</p>
            <br>
            <p>Best regards,</p>
            <p>Team</p>
            <p>MUKFAT TECHNOLOGIES SMC LTD</p>
        </div>
        <div style=\"background-color: #003B9D; color: #fff; padding: 10px; text-align: center;\">
            <p style=\"color:white;\">This is a letter sent with the system from the sales department </p>
        </div>
    </div>
    </div>";

}elseif($caller == 'comapny'){

    $email_body = "<div style=\"font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; margin: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto;\">
        <div style=\"background-color: #003B9D; color: #fff; padding: 20px; text-align: center; position: relative;\">
            <h1 style=\"margin-bottom: 10px;\">MUKFAT TECHNOLOGIES SMC LTD</h1>
            <p>head office Kampala, Uganda</p>
            <h4> SALES DEPARTMENT</h4>
        </div>
        <div style=\"background-color: #F04D0C; height: 5px;\"></div> <!-- Blue strip -->
        <div style=\"padding: 20px; background-color: #f2f2f2;\"> <!-- Light grey background -->
            <p>Dear Team,</p>
            <p>A new booking has been received. Details are as follows:</p>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $service</p>
            
            <p><strong>contact:</strong> $contact</p>
            <p><strong>Message:</strong> $message</p>
            <p>Please take appropriate action.</p>
            <br>
            <p>Best regards,</p>
            <p>Team</p>
            <p>MUKFAT TECHNOLOGIES SMC LTD</p>
        </div>
        <div style=\"background-color: #003B9D; color: #fff; padding: 10px; text-align: center;\">
            <p style=\"color:white;\">This is a notification sent from the SALES department system.</p>
        </div>
    </div>
</div>";


}

    // Set your Gmail credentials
    $gmail_user = 'mukfattechnologiessmcltd@gmail.com';
    $gmail_password = 'lfed nwtc xipd qpqw';

    // Email headers
    $headers = "From: $gmail_user\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    

   

    // Instantiate PHPMailer
    $mail = new PHPMailer();

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $gmail_user;
    $mail->Password = $gmail_password;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email content
    $mail->setFrom($gmail_user);
    $mail->addAddress($email);
    $mail->Subject = $service;
    $mail->isHTML(true);
    $mail->Body = $email_body;

    // Send email
    if ($mail->send()) {
        return true;
    } else {
        return false;
    }
}

// Get form data
$name = $_POST['name'];
$company = $_POST['company'];
$clientcontact = $_POST['clientcontact'];
$service = $_POST['service'];
$email = $_POST['email'];
$message = $_POST['message'];
$systememail = 'sales@mukfattechnologies.com';




$conn = connection();

// Escape user inputs for security
$name = $conn->real_escape_string($_POST['name']);
$company = $conn->real_escape_string($_POST['company']);
$contact = $conn->real_escape_string($_POST['clientcontact']);
$service = $conn->real_escape_string($_POST['service']);
$message = $conn->real_escape_string($_POST['message']);
$email = $conn->real_escape_string($_POST['email']);

// Insert data into database
$sql = "INSERT INTO websitebooking (name, company, contact, service, message, email) VALUES ('$name', '$company', '$contact', '$service', '$message', '$email')";

if ($conn->query($sql) === TRUE) {
    echo sendConfirmationEmail($name, $email, $service, $message,$contact,'client');
echo sendConfirmationEmail($name, $systememail, $service, $message,$contact,'comapny');
    echo "your booking has been placed please wait while we allocate you to our free agent ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
// Send email







?>

