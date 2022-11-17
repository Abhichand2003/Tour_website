<?php
include 'config.php';
$id=$_GET['id'];
$query= "DELETE FROM booking_form where id='$id'";
$data=mysqli_query($conn,$query);
if($data){
    ?>
    <script type="text/javascript">
        alert("package deleted successfully");
        window.open("http://localhost/final/mybookings.php","_self");
    </script>
    <?php
}
else{
    ?>
    
    <script type="text/javascript">
    alert("Please try again");
    </script>
    <?php

}
?>