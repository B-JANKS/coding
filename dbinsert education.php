<?php
session_start();

if(isset($_POST['institute']) && isset($_POST['program']) && isset($_POST['lnumber']) && isset($_POST['level']) && isset($_POST['year'])   ){
  session_start();
  include"dbconn.php";

$institute=$_POST['institute'];
$program=$_POST['program'];
$lnumber=$_POST['lnumber'];
$levell=$_POST['level'];
$year_study=$_POST['year'];

$newC = $_SESSION["favcolor"];

// Echo session variables that were set on previous page
echo "appcode is " . $newC. ".<br>";
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql9 = "SELECT *FROM loan ORDER BY id DESC";
$res9 = mysqli_query($conn, $sql9); 

if (mysqli_num_rows($res9) > 0) {
    foreach ($res9 as $row) { 
      
     $today = $row['appCode'];
     if ($newC  == $today) {
       $sql = "UPDATE loan SET institute='$institute', program='$program', lnumber='$lnumber', level_='$levell', year='$year_study'    WHERE appCode = '$newC' ; ";
       echo "DONE ";

    mysqli_query($conn, $sql);
    header("location: guarantor details.php");

     exit();

}}



               
}else{
    echo "connection failed";
}}