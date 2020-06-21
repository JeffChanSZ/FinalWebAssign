<!DOCTYPE html>
<!-- get header ('Page Name'. 'Title')-->
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="FinalExam" />
        <meta name="author" content="ChanSiawZheng" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Seminars | Manager</title>
        <link rel="icon" href="images/logo.jpg" type="image/x-icon" /> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="styles/style.css" />
        <script src="scripts/process.js"></script>
    
    </head>

    <header class="header">
		<div class="nav-bar" id="myNavBar">
	<p><a class="logo" href ="index.html">
		<img src="images/logo.jpg" alt="Logo" />
	</a>
	</p>
	
<!--Menu Section-->	
	<p>
	<a href="index.html">Home</a>
	<a href="register.html">Register</a>
	<a href="process.php">Process</a>
	<a href="manager.php" class="active">Manager</a>
	
  	</p><!--Menu End-->
</div>
</header><!--Header End-->

<!--Directory Section-->
<div class="directory">
	<div class="container">
		<a href="index.html">Home </a>>
        <a href="register.html">Manager </a>
	</div>
</div><!--Directory End-->
<form action="manager.php" method="POST">

<p><label>Display Option:</label></p>
<p><label class="contact">					
	    <input type="radio" class="contact" name="option" value="all"  checked/> Show all Orders:
	</label>
            <label class="contact">	
                <input type="radio" class="contact" name="option" value="reference" /> Reference Number:
                <input type="text"  name="reference" placeholder="Enter Reference Number">            
            </label>
            <label class="contact">
                <input type="radio" class="contact" name="option" value="username"/> Username:
                <input type="text"  name="username" placeholder="Enter Username">
			</label>
           </p>		
           <input type="submit" name="submit" value="Search" class="btn">

</form>




</body>

<?php
require 'settings.php';
$sql="SELECT * FROM registration";

if (isset($_POST['submit'])) { 
    if (isset($_POST['option'])){
        $option=$_POST['option'];

        if($option=="username"){
            if (isset($_POST['username'])){
                $username=$_POST['username'];
                $sql = "SELECT * FROM registration WHERE username = '".$username."'";

              }
        }
        elseif ($option=="all") {
            $sql="SELECT * FROM registration";
        }
        elseif ($option=="reference") {
            if (isset($_POST['reference'])){
                $reference=($_POST['reference']);
                $sql = "SELECT * FROM registration WHERE reference = '".$reference."'";

              }
        }
        elseif ($option=="qualification") {
            if (isset($_POST['qualification'])){
                $qualification=($_POST['qualification']);
                $sql = "SELECT * FROM registration WHERE qualification = '".$qualification."'";

              }
        }
        elseif ($option=="email") {
            if (isset($_POST['email'])){
                $email=($_POST['email']);
                $sql = "SELECT * FROM registration WHERE email = '".$email."'";

              }
        }
        elseif ($option=="phone") {
            if (isset($_POST['phone'])){
                $phoneno=($_POST['phone']);
                $sql = "SELECT * FROM registration WHERE phone = '".$phoneno."'";

              }
        }


    }
}

    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn,$sql);

echo "<table border='1'>";


mysqli_close($conn);
?>

<div class="parallax2"></div>
	<!--Footer-->	
	<footer class="footer">
	<div class="row">
		<div class="column">
			<h3>Contact</h3>
			<p>101217869@swin.edu.au</p>
			<p>(+61)0401037123</p>
			<p>Swinburne University of Technology Hawthorn Campus,
			<br/>
			<br />Melbourne Australia</p>
			<div class="bottom-bar">
     <p> 2020 Copyright © SEMINARS AUSTRALIA. All Rights Reserved </p>
	  </div>
		</div>
		
		<div class="column">
			<h3>Navigate</h3>
				<ul class="footer-links">
					<li><a href="index.html">Home</a></li>
					<li><a href="register.html">Register</a></li>
					<li><a href="process.php">Process</a></li>
					<li><a href="manager.php">Manager</a></li>
				</ul>
		</div>
		
			<div class="column">
			<h4>Connect</h4>
			<a class="facebook" href="https://www.facebook.com">
				<i class="fa fa-facebook-square"> </i>
			</a>	
			<a class="twitter" href="https://www.twitter.com">
				<i class="fa fa-twitter-square"> </i>
			</a>
			<a class="instagram" href="https://www.instagram.com">
				<i class="fa fa-instagram"> </i>
			</a>
			
		</div>
		
	  </div>
	 </footer> <!-- End footer section -->	
	</body> 
	</html>


