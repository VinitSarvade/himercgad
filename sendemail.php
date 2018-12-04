<?php
	

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $contact = $_POST['contact']; 
    $message = $_POST['message']; 
    
    $email_from = $email;
 

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Contact: ' . $contact . "\n\n" . 'Message: ' . $message;
    


$to = "sheetalbandekar@gmail.com";
$subject = "Enquiry from vatsalaconstructions.com";

$headers = "From: website@vatsalaconstructions.com" . "\r\n" .
"CC: support@vatsalaconstructions.com";

if(mail($to,$subject,$body,$headers))
	echo "Your feedback is sent!!!";
else
    echo "Feedback not sent!!";
			
?>