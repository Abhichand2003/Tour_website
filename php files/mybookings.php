<?php
session_start();
require_once('config.php');

//$_SESSION['$email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>MY BOOKINGS</title>
</head>
<body>
    <div class="container">
        <header>MY BOOKINGS</header>
    
<table border="1px" cellpadding = "10px" cellspacing = "0" >

<tr>
    <th>Name</th>
    <th>No of people</th>
    <th>selected package</th>
    <th>email</th>
   
    <th colspan="2">Actions</th>

</tr>
<?php
    $umail = $_SESSION['details']['email'];
   $query=" SELECT * from booking_form where email = '$umail'";
$data=mysqli_query($conn,$query);
$result = mysqli_num_rows($data);
if($result){
    while($row=mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $row['name']?></br></td>
        <td><?php echo $row['No_of_people']?></td>
        <td><?php echo $row['select_package']?></td>
        <td><?php echo $row['email']?></td>
        
        <td><a onclick="return confirm('Are you sure, you want to delete?')" 
        href="delete.php?id=<?php  echo $row['id']?>">Cancel</a></td>
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