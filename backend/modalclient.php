
<?php
include 'database.php';

if (!isset($_SESSION)) {
    session_start();
}

class client
{

 public $name; 

 public $email; 

 public $contact; 

 public $company; 

 

 public $service; 

 public $message; 



   
   
   
   public function saveclient (){
    if( 
empty($this->name) &&

empty($this->email) &&

empty($this->contact) &&

empty($this->company) &&

empty($this->service) &&

empty($this->message) 
){
       $this->status = "false";
       $this->erro_message ="fill in all the reqiured fields";
        return $this->status;
        return $this->erro_message;
    } else{
       
$conn = connection();$sql = $conn->prepare( " INSERT INTO `bookings` (
`bookingsource`,


`customernames`,

`email`,

`contact`,

`company`,



`service`,

`message`,



`createddate`
)values(
    'website',
?,

?,

?,

?,

?,

?,



(select current_timestamp())
);"); 




$sql->bind_param("ssssss",

$this->name,

$this->email,

$this->contact,

$this->company,
$this->service,

$this->message
 );




if($sql->execute()){
               $this->status = "true";
                return $this->status;
            }else{
               $this->status = "false";
               $this->erro_message = $sql->error_list[0]['error'];
                return $this->status;
                return $this->erro_message;
            }
        
        }
    }




}




























 
 










