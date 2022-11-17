<?php

@include 'config.php';

session_start();


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);


   $select = " SELECT * FROM admin_table WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
     
        $_SESSION['admin_name'] = $row['name'];
        header('location:view.php');

      // if($row['user_type'] == 'admin'){

      //    $_SESSION['admin_name'] = $row['name'];
      //    header('location:admin_page.php');

      // }elseif($row['user_type'] == 'user'){

      //    $_SESSION['user_name'] = $row['name'];
      //    header('location:user_page.php');

      // }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ADMIN LOGIN</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="register.css">

</head>
<body>
   
<div class="form-container">

   <form action="view.php" method="post" autocomplete = "off">
      <h3>ADMIN LOGIN</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="ADMIN EMAIL">
      <input type="password" name="password" required placeholder="PASSWORD">
      <input type="submit" name="submit" value="login now" class="form-btn">
   </form>

</div>

</body>
</html>