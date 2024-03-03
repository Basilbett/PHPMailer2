<?php 




$email=$_POST["email"];
$token=bin2hex(random_bytes(16));

$token_hash=hash("sha256", $token);

$expiry=date("Y-m-d H:i:s", time() + 60*30);

$mysqli = require __DIR__ ."/connection.php";
$sql = "UPDATE  users
SET reset_token_hash= ?,
   reset_token_expires_at= ?
   where email= ? ";

$stmt = $con->prepare($sql);
$stmt ->bind_param("sss", $token_hash, $expiry, $email);
$stmt ->execute();

if($con->affected_rows){
   $mail=require __DIR__ ."/mailer.php";
   $mail->setFrom("noreply@example.com");
   $mail->addAddress($email);
   $mail->Subject="password reset";
   $mail->Body= <<<END

   Click<a href="http://example.com/reset-password.php? token=$token">here</a>to reset password.


   END;

   
try{

   $mail->send();
}
     
   
   
   catch(Exception $e){
     //echo "message could not be send:mailer error:{$mail->ErrorInfo}";
   }
   
   

}
echo "message send check your inbox";

