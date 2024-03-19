
<?php 


    $ToEmail = 'felinfs122@gmail.com'; 
    $EmailSubject = 'Site contact form Natahn Tours Website'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 

 
    $MESSAGE_BODY = "\r\n Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "\r\n Email: ".$_POST["email"]."";
    $MESSAGE_BODY .= "\r\n Confirm E-mail: ".$_POST["cemail"]."";
    $MESSAGE_BODY .= "\r\n Phone: ".$_POST["phone"]."";
    $MESSAGE_BODY .= "\r\n Message: ".$_POST["message"]."";

    // Connect to the database
     $servername = "localhost";
    $username = "nathantour_nt";
    $password = "123456789";
    $dbname = "nathantour_nt";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die;
  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cemail = $_POST['cemail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO  get_in_touch (name, email, confirm_email ,phone ,message, created_at, updated_at) VALUES ('$name', '$email', '$cemail','$phone','$message', '$created_at', '$updated_at')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
	
	
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

echo"<script>alert('We will contact you as soon as possible')</script>";
echo"<script>window.location.href='thankyou.html'</script>";

?>