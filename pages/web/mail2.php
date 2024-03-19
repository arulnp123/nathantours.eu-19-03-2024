
<?php 


    $ToEmail = 'felinfs122@gmail.com , saranrajkavi1995@gmail.com'; 
    $EmailSubject = 'Site contact form Natahn Tours Website'; 
    $mailheader .= "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
  
    $MESSAGE_BODY .= "\r\n packages_name: ".$_POST["packages_name"].""; 
    $MESSAGE_BODY .= "\r\n Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "\r\n Email: ".$_POST["email"]."";
    $MESSAGE_BODY .= "\r\n Confirm E-mail: ".$_POST["cemail"]."";
    $MESSAGE_BODY .= "\r\n Date: ".$_POST["date"].""; 
    $MESSAGE_BODY .= "\r\n Days: ".$_POST["days"]."";
    $MESSAGE_BODY .= "\r\n Phone: ".$_POST["phone"]."";
    $MESSAGE_BODY .= "\r\n Adults>12 years: ".$_POST["adults"]."";
    $MESSAGE_BODY .= "\r\n kids 4-12 years: ".$_POST["years"]."";
    $MESSAGE_BODY .= "\r\n kids <4 years: ".$_POST["kids"]."";
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
  
    $packages_name = $_POST['packages_name'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cemail = $_POST['cemail'];
    $date = $_POST['date'];
    $no_of_days = $_POST['days'];
    $phone = $_POST['phone'];
    $adults = $_POST['adults'];
    $years = $_POST['years'];
    $kids = $_POST['kids'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO  hot_tours_booking (packages_name ,name, email, confirm_email, select_date,no_of_days, phone, adult_over_12, kid_4_to_12_years, kid_below_4, message, created_at, updated_at, price) VALUES ('$packages_name', '$name', '$email', '$cemail', '$date', '$no_of_days', '$phone', '$adults', '$years', '$kids', '$message', '$created_at', '$updated_at' ,'$price')";


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