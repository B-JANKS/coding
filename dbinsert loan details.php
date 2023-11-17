<?php
session_start();

if(isset($_POST['fav_language']) && isset($_POST['amountwords']) && isset($_POST['rate']) && isset($_POST['amountdigit'])    ){

$sponsorship=$_POST['fav_language'];
$amount_words=$_POST['amountwords'];
$rate=$_POST['rate'];
$amountdigit=$_POST['amountdigit'];

$newC = $_SESSION["favcolor"];
include"dbconn.php";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql9 = "SELECT *FROM loan ORDER BY id DESC";
  $res9 = mysqli_query($conn, $sql9); 
  
  if (mysqli_num_rows($res9) > 0) {
      foreach ($res9 as $row) { 
        
       $today = $row['appCode'];
       if ($newC  == $today) {
         $sql = "UPDATE loan SET heslb ='$sponsorship', amount1_='$amount_words', rate='$rate', amount2_='$amountdigit'   WHERE appCode = '$newC' ; ";
   
      mysqli_query($conn, $sql);
      header("location: loan application.php");
  
       exit();
  
  }}
  
  
  
                 
  }else{
      echo "connection failed";
  }

}else{
    echo "connection failed";
}