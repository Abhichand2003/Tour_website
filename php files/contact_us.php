<?php
@include 'config.php';

if(isset($_POST['submit'])){

   $name = ($_POST['name']);
   $email = ($_POST['email']);
   $number = ($_POST['number']);
   $subject = ($_POST['subject']);
   $message = ($_POST['message']);


   



   $insert = "INSERT INTO contact_us(name,email,ph_no,subject,message) VALUES('$name','$email','$number','$subject','$message')";
    mysqli_query($conn, $insert);
   header('location:http://localhost/final/project/');
      
   };

?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact_us</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="contact_us.css">

</head>
<body>
   
<div class="form-container">

   <form action="contact_us.php" method="post" autocomplete = "off">
      <h3>send us feedback</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
   
      <input type="text" name="name" required placeholder="Name">
      <input type="email" name="email" required placeholder="Email">
      <input type="numeric" name="number" required placeholder="number">
      <input type="text" name="subject" required placeholder="subject">
      <input type="text" name="message" required placeholder="message">
     
      <input type="submit" name="submit" value="send message" class="form-btn">
   </form>

</div>

</body>
</html>