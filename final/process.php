<?php
$reference="";
$username="";
$qualification="";
$email="";
$phoneno="";


//Data validaton here
  if (!empty($_POST)){
    $reference = $_POST['reference'];
    $username = $_POST['username'];
    $qualification = $_POST['qualification'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];

    // echo "<p>" . $reference . "</p><br>";
    // echo "<p>" . $username . "</p><br>";

    //Get Qualification here

  // if (isset($_POST['reference']) && $_POST['reference'] !="" ){
  //   $reference = $_POST['reference'];

  // }

  // if (isset($_POST['username']) && $_POST['username'] !="" ){
  //   $username = $_POST['username'];

  // }

  if (isset($_POST['qualification']) && $_POST['qualification'] !="" ){
    $qualification = $_POST['qualification'];

  }
  else {
    echo "<p>Error: Please select your qualification. </a></p>";
  }

  // if (isset($_POST['email']) && $_POST['email'] !="" ){
  //   $email = $_POST['email'];

  // }

  // if (isset($_POST['phoneno']) && $_POST['phoneno'] !="" ){
  //   $phoneno = $_POST['phoneno'];

  // }
  

    /*
     Before an order is written to the orders table the data format rules need to be checked.
These rules are specified in Part 1 (for customer details) and Part 2 (for product quantity and
credit card details), and a product with options should also be able to be selected and checked.
You need to replicate this checking in your PHP code
    */
    require 'settings.php';

    //CONNECT TO DATABASE HERE
    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if ( mysqli_query( $conn,"DESCRIBE `registration`" ) ) {
    // my_table exists
}
else{

  //IF TABLE NOT EXISTS, CREATE TABLE
$sql = "CREATE TABLE registration (
  ID INT(11)  AUTO_INCREMENT PRIMARY KEY,
  Seminar_reference_number VARCHAR(6) NOT NULL,
  Username VARCHAR(20) NOT NULL,
  Qualification VARCHAR(255),
  Email_address VARCHAR(255),
  PhoneNo VARCHAR(10),
  )";
      $result = mysqli_query($conn, $sql);

}
  $sql = "INSERT INTO registration (Seminar_reference_number,Username,Qualification,Email_address,PhoneNo) 
  VALUES ('$reference','$username','$qualification','$email','$phoneno')";
  if ($conn->query($sql) === TRUE) {
    echo "You are successfully registered!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  }  

?>