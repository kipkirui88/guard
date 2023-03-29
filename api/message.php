<?php
include 'includes/conn.php';
if(isset($_POST['submit'])){ 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $date =  date('d-m-Y H:i:s') ;
    $write =mysqli_query($conn,"INSERT INTO mails ( `name`,`email`, `message`,`subject`,`date`) 
    VALUES (' $name','$email','$message','$subject','$date')") or die(mysqli_error($conn));
     echo "<script>alert('Message sent Successfully.');document.location ='index.php';</script>"; }        
?>