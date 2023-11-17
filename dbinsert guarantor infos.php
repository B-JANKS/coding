<?php
session_start();

if(isset($_POST['gfname']) && isset($_POST['gsname']) && isset($_POST['glname']) && isset($_POST['fav_language']) &&isset($_POST['ginstitute']) && isset($_POST['gprogram']) && isset($_POST['gregno']) && isset($_POST['glevel']) && isset($_POST['gyear']) && isset($_POST['gnin']) && isset($_POST['gphone'])  ){

$gfname=$_POST['gfname'];
$gsname=$_POST['gsname'];
$glname=$_POST['glname'];
$ggender=$_POST['fav_language'];
$gnin=$_POST['gnin'];
$gphone=$_POST['gphone'];
$ginstitute=$_POST['ginstitute'];
$gprogram=$_POST['gprogram'];
$glnumber=$_POST['gregno'];
$glevel=$_POST['glevel'];
$gyear_study=$_POST['gyear'];

$newC = $_SESSION["favcolor"];
include"dbconn.php";
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
         $sql = "UPDATE loan SET gfname='$gfname', gsname='$gsname', glname='$glname', ggender='$ggender', gnin='$gnin',gphone='$gphone', ginstitute='$ginstitute', gprogram='$gprogram', glnumber='$glnumber', glevel='$glevel' , gyear='$gyear_study'   WHERE appCode = '$newC' ; ";
         echo "DONE ";
  
      mysqli_query($conn, $sql);
      header("location: loan details.php");

       exit();
  
  }}

}else{
    echo "connection failed";
}
}