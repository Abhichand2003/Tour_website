<?php
@include 'config.php';

if(isset($_POST['submit'])){

   $first_name = ($_POST['first_name']);
   $last_name = ($_POST['last_name']);
   $gender = ($_POST['gender']);
   $email = ($_POST['email']);
   $country = ($_POST['country']);
   $mobile_no = ($_POST['mobile_no']);
   $mobile_no2 = ($_POST['mobile_no2']);
   $address = ($_POST['address']);
   $address_2 = ($_POST['address_2']);
   $passport_no = ($_POST['passport_no']);


   $insert = "INSERT INTO customer(first_name,last_name,gender,email,country,mobile_no,mobile_no2,address,address_2,passport_no)
    VALUES('$first_name','$last_name','$gender','$email','$country','$mobile_no','$mobile_no2','$address','$address_2','$passport_no')";
    mysqli_query($conn, $insert);
   header('location:booking.php');
      
   };

?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="customerdetails.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
    <title>Customer details</title>
</head>
<body>
    <div class="container">
        <!-- <header>Customer details</header> -->
       
        <form action="customerdetails.php" method = "POST" autocomplete = "off">
        <header>Customer details</header>
    
            <!-- <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span> -->

                    <?php
                    if(isset($error)){
                        foreach($error as $error){
                           echo '<span class="error-msg">'.$error.'</span>';
                        };
                     };
                     ?>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <!-- <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required> -->
                            <label> Gender</label>
                            <select name="gender">
                                <option disabled selected>Select Gender</option>
                                 <option>male</option>
                                 <option>female</option>
                              </select>    
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-field">
                            <label>Country</label>
                            <input type="text" name="country" required placeholder="Nationality">
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="numeric" name="mobile_no" placeholder="Enter mobile number" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number 2</label>
                            <input type="numeric" name="mobile_no2" placeholder="Enter mobile number" required>
                         </div>

                    
                      
                                <div class="input-field">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Enter your Address" required>
                                </div>
                                <div class="input-field">
                                    <label>Alternate address</label>
                                    <input type="text" name="address_2" placeholder="Alternate Address" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Passport</label>
                                    <input type="numeric" name="passport_no" required placeholder="passport-no">
                                </div>
                                <button class="sumbit" name = "submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                            </form>

                        </div>
                        <!-- <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter your ccupation" required>
                        </div> -->
                    <!-- </div> -->
                    <header>If you have already filled this form <a href="http://localhost/final/booking.php">click here</a></header>
                </div>
               

                <!-- <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID number" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Authority</label>
                            <input type="text" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Expiry Date</label>
                            <input type="date" placeholder="Enter expiry date" required>
                        </div>
                    </div> -->

                    <!-- <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div> -->

            <!-- <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Grandfather</label>
                            <input type="text" placeholder="Enter grandfther name" required>
                        </div>

                        <div class="input-field">
                            <label>Spouse Name</label>
                            <input type="text" placeholder="Enter spouse name" required>
                        </div>

                        <div class="input-field">
                            <label>Father in Law</label>
                            <input type="text" placeholder="Father in law name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother in Law</label>
                            <input type="text" placeholder="Mother in law name" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div> -->

    <!-- <script src="customerdetails.js"></script> -->
    
</body>
</html>
