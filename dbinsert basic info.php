<?php
// Start the session
session_start();
if(isset($_POST['fname'])  && isset($_POST['sname']) && isset($_POST['lname']) && isset($_POST['fav_language']) && isset($_POST['birth'])    ){
  session_start();

$fname=$_POST['fname'];
$sname_=$_POST['sname'];
$lname=$_POST['lname'];
$gender=$_POST['fav_language'];
$nin=$_POST['nin'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$birth=$_POST['birth'];
$code = rand(10000,100000);

// Set session variables
$_SESSION["favcolor"] = "$code";
echo "$code";

// Create connection
include"dbconn.php";

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO loan (appCode,first_name,second_name, sur_name, gender, nida,phone,email,birth_date)
VALUES ('$code','$fname', '$sname_', '$lname' ,'$gender','$nin','$phone','$email','$birth');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("location: education details.php");

}else{
    echo "connection failed";
}