
<?php
 // Load PHPMailer library
 require '../../vendor/autoload.php';
// PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Function to send email
function sendConfirmationEmail($name, $email, $subject, $message,$caller) {
    // Set your email body
    if($caller == 'client'){

    
    $email_body = "<div style=\"font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; margin: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto;\">
        <div style=\"background-color: #181C85; color: #fff; padding: 20px; text-align: center; position: relative;\">
            <h1 style=\"margin-bottom: 10px;\">HARAX CONSULTS LTD</h1>
            <p>head office Kampala, Uganda</p>
            <h4> ENGINEERING DEPARTMENT</h4>
        </div>
        <div style=\"background-color: #F04D0C; height: 5px;\"></div> <!-- Blue strip -->
        <div style=\"padding: 20px; background-color: #f2f2f2;\"> <!-- Light grey background -->
            <p>Dear $name,</p>
            <p>Subject: <strong style=\"text-decoration: underline;\">$subject</strong> </p>
            <p> We are writing to confirm the receipt of your booking. Your project is now in our system and is being processed by our engineering team.</p>
            <p>For tracking purposes, your project has been assigned the following project number: 457-845-786.. This unique identifier will help us efficiently manage and monitor the progress of your construction project.</p>
            <p>Rest assured, our experienced team of engineers is dedicated to delivering high-quality results and ensuring that your project progresses smoothly and efficiently.</p>
            <p>If you have any questions or require further assistance, please feel free to reach out to us. We are here to provide support and address any concerns you may have.</p>
            <p>Thank you for choosing HARAX CONSULTS LTD. We are excited to collaborate with you and bring your project to fruition..</p>
            <br>
            <p>Best regards,</p>
            <p>engineer</p>
            <p>Managing director </p>
            <p>HARAX CONSULTS LTD</p>
        </div>
        <div style=\"background-color: #181C85; color: #fff; padding: 10px; text-align: center;\">
            <p style=\"color:white;\">This is a letter sent with the system from the engineering department </p>
        </div>
    </div>
    </div>";

}elseif($caller == 'comapny'){

    $email_body = "<div style=\"font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; margin: 20px;\">
    <div style=\"max-width: 600px; margin: 0 auto;\">
        <div style=\"background-color: #181C85; color: #fff; padding: 20px; text-align: center; position: relative;\">
            <h1 style=\"margin-bottom: 10px;\">HARAX CONSULTS LTD</h1>
            <p>head office Kampala, Uganda</p>
            <h4> ENGINEERING DEPARTMENT</h4>
        </div>
        <div style=\"background-color: #F04D0C; height: 5px;\"></div> <!-- Blue strip -->
        <div style=\"padding: 20px; background-color: #f2f2f2;\"> <!-- Light grey background -->
            <p>Dear Team,</p>
            <p>A new booking has been received. Details are as follows:</p>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
            <p>Please take appropriate action.</p>
            <br>
            <p>Best regards,</p>
            <p>engineer</p>
            <p>Managing Director</p>
            <p>HARAX CONSULTS LTD</p>
        </div>
        <div style=\"background-color: #181C85; color: #fff; padding: 10px; text-align: center;\">
            <p style=\"color:white;\">This is a notification sent from the engineering department system.</p>
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
    $mail->Subject = $subject;
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
$message = $_POST['messagearea'];
$systememail = 'sales@mukfattechnologies.com';
// Send email
echo sendConfirmationEmail($name, $email, $service, $message,'client');
echo sendConfirmationEmail($name, $systememail, $service, $message,'comapny');

// if(){
//      // Prepare SQL statement to insert visit into database
//      $sql = "INSERT INTO websitmessagessent (acceptlanguage,clienthost,websiteconnection,sessionid,website,ip,useragent,referrer,visittime) 
//      VALUES ('$accept_language','$host','$connection','$session_id',1,'$ip_address','$user_agent','$referrer',NOW())";
 
//      // Execute SQL statement
//      if ($conn->query($sql) === TRUE) {
         
         
//          // Mark visit as recorded in session to prevent duplicates
//          $_SESSION['visit_recorded'] = true;
//      } 
// }

?>

