<?php
if(isset($_POST['submit'])){
    $name  = $_POST['username'];
    $email = $_POST['user_email'];
    $usercontact = $_POST['user_number'];
    $userSubject = $_POST['user_subject'];
    $message = $_POST['user_message'];

$mailto = "flexworld.pk@gmail.com";
$subject= "Response from website your portfolio website";
$headers = "From :" .$email;
$txt =  "You have recieved an email from : "  .$name . "\n\n" .
        "Email of the sender is : " .$email . "\n\n" .
        "Contact No of the sender is : " .$usercontact . "\n\n" .
        "subject is :" .$userSubject . "\n\n" .
        "message is :" .$message ;
mail($mailto,$subject,$txt,$headers);
header("location:index.html");
}
?>