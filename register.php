
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
    $phone = $_POST['mobile'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $hall = $_POST['hallname'];
    $check1 = $_POST['check1'];
    $sql= "INSERT INTO `database`(`name`, `email`, `date`, `mobile`, `address`, `pincode`, `hallname`, `check1`)  VALUES ('$name','$email','$date','$phone','$address','$pincode','$hall','$check1')";
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

<br> <br><br><br><br><br><br><br>
<html>
<head>
<style>
ul
{
list-style-type="none";
margin:0;
padding:0;
overflow:hidden;
background-color:white;
}



li{float:left;}
li a,   .dropbtn
{
display:inline-block;
color:black;
text-align:center;
padding: 30px 75px;
text-decoration: none;
}


li a:hover, .dropdown:hover  .dropbtn
{
background-color:orange;
}


li .dropdown
{
display:inline-block;
}


.dropdown-content
{
display:none;
position:absolute;
background-color:orange;
min-width:160px;
box-shadow:2px 8px 16px 0px rgba(0,0,0,0.2);
}


.dropdown-content a{
color:black;
padding:15px  16px;
text-decoration:none;
display:block;
text-align:left;
}


.dropdown-content a:hover
{
background-color:indigo;
display:block;
}


.dropdown:hover .dropdown-content{
display:block;
}

div.img{
margin:5px;
border:1px solid #ccc;
float:left;
width:480px;
}

div.img img{width:100%;
height:480px;
}


div.desc{padding:15px;
text-align:center}

div.footer
{
color:red;
float:center;
}


input[type=submit] {
    width: 100%;
    background-color:skyblue;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:blue;
}
div.table {
display:block;
 margin-left:auto;
margin-right:auto;
  border-radius: 5px;
border:  solid black;
    background-color: white;
    padding: 40px ;
width:45%;
}
input[type=submit]:hover;
 {
    background-color:orange;
}

</style>
</head>
<body bgcolor="darkorange">


<font size="50" color="white"><b><i>VENUE BOOKING SYSTEM</i></b></font>
<table border="3" color="magenda"  width="100%">
<ul>
<li><a href="home.html"><b>HOME</b></a></li></th>
<li><a href="about.html"><b>ABOUT US</b></a></li>
<li><a href="gallery.html"><b>VENUES</b></a></li>
<li><a href="email.html"><b>CUSTOMER LOGIN</b></a></li>
<li><a href="registration.html"><b>REGISTRATION</b></a></li>
<li><a href="contact.html"><b>CONTACT US</b></a></li>

</ul>
</table>

<br>
<h1><center><font color="black">Registration Form</font></center></h1>

 <div class="table">
<form action="register.php" method="POST">
<label for="name"><b>Name*</b></label>
<textarea name="name" required cols="90" rows="2" name="name"></textarea>
<br><br>
<hr><br>
<div style="float:right">
<label for="email"><b>Email*</b></label>
<input type="email" required cols="90" rows="2" name="email" ></div>
 
<div style="float:left">
<label for="date"><b>Booking Date*</b></label>
<input type="date" required cols="90" rows="2" name="date"></div>
<br><br>

<hr><br>
  <label for="number"><b>phone Number*</b></label>
<input type="number" required cols="90" rows="2" placeholder="enter a velid mobile number" name="mobile"></textarea>
<br><br>
<hr><br>
  <label for="address"><b>Address Details*</b></label>
   <input type="text" required cols="90" rows="5" name="address" >
   <br><br>
<hr><br>
<label for="pincode"><b>Pincode*</b></label>
   <input type="number" required cols="90" rows="2" name="pincode" required>
   <br><br> <hr><br>
<label for="hallname"><b>Hall Name*</b></label>
<input type="text" required cols="90" rows="2" name="hallname" required>

<br><br><hr><br>
<label for="Hall Category"><b>Hall Category*</b></label><br><br>
<input type="radio" id="Wedding" name="check1" value="wedding">Wedding
<input type="radio" id="BirthDay" name="check1" value="birthday">BirthDay
<input type="radio" id="Reception" name="check1" value="reception">Reception
<input type="radio" id="Name Ceremony" name="check1" value="name ceremony">Name Ceremony
<input type="radio" id="Engagement" name="check1" value="engagement">Engagement
<input type="radio" id="Baby Shower" name="check1" value="baby shower">Baby Shower <br>
<input type="radio" id="Corporate Event" name="check1" value="corporate event">Corporate Event

<br><br>
<center><input type="submit" onclick="location.href='home.html'" name="save" value="Submit"/></center>

   <br><br> 

 </form>
</div>
<br>
<hr>
<h2  align="right">&copy Venue booking System </h2>
</form>
</body>

</html>

  

