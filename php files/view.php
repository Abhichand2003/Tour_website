<?php

session_start();
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>view all bookings</title>
</head>
<body>
    <div class="container">
        <header>All bookings</header>
    
<table border="1px" cellpadding = "10px" cellspacing = "0" >

<tr>
    <th>Name</th>
    <th>No of people</th>
    <th>departure date</th>
    <th>selected package</th>
    <th>email</th>
   
    <th colspan="2">Actions</th>

</tr>
<?php
$query=" SELECT * from booking_form";

$data=mysqli_query($conn,$query);
$result = mysqli_num_rows($data);
if($result){
    while($row=mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $row['name']?></br></td>
        <td><?php echo $row['No_of_people']?></td>
        <td><?php echo $row['departure_date']?></td>
        <td><?php echo $row['select_package']?></td>
        <td><?php echo $row['email']?></td>
        
        <td><a onclick="return confirm('Are you sure, you want to delete?')" 
        href="deleteadmin.php?id=<?php  echo $row['id']?>">Cancel</a></td>
    </tr>
  <?php
    }
}
?>
</table>
<!-- <footer><a href="">logout</a></footer> -->
<a href="http://localhost/final/project/" class="btn">logout</a>
</div>
</body>
</html>