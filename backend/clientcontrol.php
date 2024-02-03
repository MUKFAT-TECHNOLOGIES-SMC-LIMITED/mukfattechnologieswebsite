
<?php


include 'modalclient.php';

if (session_status() == PHP_SESSION_ACTIVE) {
   

if ($_POST['key'] == "getclientofintergrationresults") {
   $_SESSION['sessionclient'] = mysqli_real_escape_string(connection(),$_POST['id']);
}

 
if ($_POST['key'] == "createclient") {
  
   $instance = new client();
   
    
$instance->name = mysqli_real_escape_string(connection(),$_POST['name']);

$instance->email = mysqli_real_escape_string(connection(),$_POST['email']);

$instance->contact = mysqli_real_escape_string(connection(),$_POST['contact']);

$instance->company = mysqli_real_escape_string(connection(),$_POST['company']);

$instance->service = mysqli_real_escape_string(connection(),$_POST['service']);

$instance->message = mysqli_real_escape_string(connection(),$_POST['message']);



    
    
      $instance->saveclient();

   if ($instance->status == "true") {
   $response = array(
       "status" => "$instance->status",
       "msg" => "your booking was successfully posted and we will be in touch ",
       );
   }else{

   $response = array(
       "status" => "$instance->status",
       "msg" => "$instance->erro_message",
   );
   }

   echo(json_encode($response));
}











}else{
   $response = array(
       "status" => "sessionout",
       "msg" => "session timeout relogin",
     );

     echo(json_encode($response));
}

