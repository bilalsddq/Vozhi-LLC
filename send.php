<html>
<head></head>
<title></title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />  
<body>
<?php
$to="vozhi.homes@gmail.com";
$subject="Form Submission";
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];
$meassage=$_POST['Comment']; 


$message="Hi, a option form has been submitted on your site with the following details :
--------------------------------------------------- 
Name : ".$Name."

Email :".$Email."

Subject :".$Subject."

Message : ".$meassage."

--- END OF MESSAGE --

";
$headers = "From: Vozhi LLC <mailer@vozhillc.com>" . "\r\n";

$mail=mail($to,$subject,$message,$headers);
if($mail)
{
?>     
<script type="text/javascript">             
$(document).ready(function() {
swal({ 
 title: "Message Sent",
 text: "Succesfully sent your message !!",
 type: "success" 
 },
  function(){
 window.location.href='index.html';
  });
 });
</script>
<?php
}
else
{
?>  
<script type="text/javascript">             
$(document).ready(function() {
swal({ 
 title: "Error",
 text: "Message not sent. Please try again !!",
 type: "error" 
 },
  function(){
 window.location.href='index.html';
  });
 });
</script>
<?php
}
?>
</body>
</html>