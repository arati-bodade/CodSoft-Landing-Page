<?php
$servername="localhost";
$username="root";
$password="";
$database_name="venue";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
   die("connection failed: ". $conn->connect_error);
}
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $phone = $_POST['number'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $hall = $_POST['hall'];
    $check = $_POST['check'];
    $sql= "INSERT INTO hallbook (name,email,date,mobile,address,pincode,hall,check)
    VALUES ('$name','$email','$date','$number','$address','$pincode','$hall','$check')";
    if (mysqli_query($conn,$sql))
   {
       echo "New Details Entry inserted successfully !";
   }
   else
   {
       echo "Could not insert record:". mysqli_error($conn);
   }
    mysqli_close($conn);
   } 
?>