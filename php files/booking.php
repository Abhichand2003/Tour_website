<?php
@include 'config.php';

if(isset($_POST['submit'])){

   $name = ($_POST['name']);
   $No_of_people = ($_POST['No_of_people']);
   $departure_date = date('Y-m-d',strtotime($_POST['departure']));
   $select_package = ($_POST['select_package']);
   $email = ($_POST['email']);
   $language_preferred = ($_POST['language_prefered']);


   $insert = "INSERT INTO booking_form(name,No_of_people,departure_date,select_package,email,language_preferred) VALUES('$name','$No_of_people','$departure_date','$select_package','$email','$language_preferred')";
    mysqli_query($conn, $insert);
   header('location:user_page.php');
      
   };

?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking_form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="booking.css">

</head>
<body>
   
<div class="container">
   <header>Booking Details</header> 
   <form action="booking.php" method="post" autocomplete = "off">
      <!-- <h3>Booking details</h3> -->
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
     <div class="fields">
        <div class="input-field">
      <input type="text" name="name" required placeholder="Name">
    </div>
    <div class="input-field">
      <input type="numeric" name="No_of_people" required placeholder="No of people">
    </div>
   <div class="input-field">
      <input type="date" name="departure_date" required placeholder="departure date">
    </div>
      <!-- <input type="text" name="select_package" required placeholder="select package"> -->
      <div class="input-field">
      <select name="select_package">
                                <option disabled selected>Select package</option>
                                <option>Australia</option>
                                <option>Italy</option>
                                <option>France</option>
                                <option >Indonesia</option>
                                <option> Switzerland</option>
                                <option>UAE</option>
                            </select>
    </div>
   <div class="input-field">
      <input type="email" name="email" required placeholder="email">
    </div>
    <div class="input-field">
      <input type="text" name="language_preferred" required placeholder="language preferred">
      </div>
     
         <!-- <div class="book">
      <input type="submit" name="submit" value="Book" class="form-btn">
      
    </div> -->
    <button class="sumbit" name="submit">
                        <span class="btnText">Book</span>
                        <i class="uil uil-navigator"></i>
                    </button>
    </div>
   </form>

</div>

</body>
</html>