<?php 
   $to = 'hello@weichie.com';
   $subject = 'Weichie Proposal Request';
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers .= "From: Weichie Website <info@weichie.com>" . "\r\n";
   $headers .= "Reply-To: " . Trim(stripslashes($_POST['email'])) . "\r\n";

   $notvalid = array();

   if(!isset($_POST['name']) || trim($_POST['name']) === ''){
      $notvalid[] = 'name';
   } else {
      $subject = $_POST['name'] . ' - Website Contact';
   }
   if(!isset($_POST['email']) || trim($_POST['email']) === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $notvalid[] = 'email';
   }
   if(!isset($_POST['message']) || trim($_POST['message']) === ''){
      $notvalid[] = 'message';
   }

   if(empty($notvalid)) {      
      $message ="
         <html><body>
         <p>This email has been sent to you through the contact form on the Weichie website.</p>
         <br>
         <p><b>Name:</b> ".Trim(stripslashes($_POST['name']))."</p>
         <p><b>Email:</b> ".Trim(stripslashes($_POST['email']))."</p>
         <p><b>Company:</b> ".Trim(stripslashes($_POST['company']))."</p>
         <p><b>Phone:</b> ".Trim(stripslashes($_POST['phone']))."</p>
         <p><b>Message:</b><br> ".Trim(stripslashes($_POST['message']))."</p>
         </body></html>
      ";

      if(mail($to, $subject, $message, $headers)){
         $success = true;
         $error = 0;
         $notvalid = false;
      }else{
         $success = false;
         $error = 2;
         $notvalid = false;
      }
   }else{
      $success = false;
      $error = 1;
   }

   $data = array(
      'success' => $success,
      'error' => $error,
      'notvalid' => $notvalid,
   );

   echo json_encode($data);
   exit();

?>