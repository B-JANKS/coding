<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f7ec6a1316.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./fontawesome-free-5.0.9/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">

    <title>home</title>
    <style>
        body{ background-color: silver; margin: 10px;}
        .fa-solid{
  font-size: 200px;
  align-items: center;
  justify-items: center;
  margin: 20px;
  padding: 20px;
  color: #4CAF50;
}
p{ font-size: 20px;   align-items: center;
}
    </style>
</head>
<body>
    
<?php

if(isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['remember']) ){
$pass = $_POST['psw'];
$email = $_POST['uname'];
include "dbconn.php";

$sql = "SELECT *FROM individual  ORDER BY id DESC";
$res = mysqli_query($conn, $sql); 

if (mysqli_num_rows($res) > 0) {
    while ($images1 = mysqli_fetch_assoc($res)) {
     foreach ($res as $row) {
         $id =$row['id'];
        $requiredemail = $row['email'];
        $requiredpass = $row['password'];
        $admincode = $row['adminstration'];
        $loancode = $row['loan'];
        $paymentcode = $row['payment'];
         if($email== $requiredemail && $pass== $requiredpass ){
             if($admincode==232323){
             ?>
          <a href="./admin/users.php"><i class="fa-solid fa-gears"><P>ADMINISTRATION</P></i></a>
             <?php
         }
         if($loancode==434343){
            ?>
         <a href="loan application.php"><i class="fa-solid fa-credit-card"><P>APPLY LOAN</P></i></a>
            <?php
        }
        if($paymentcode==636363){
            ?>
         <a href="./payment/list.php"><i class="fa-solid fa-briefcase"><P>LOAN   PAYMENT</P></i></a>
            <?php           
        }
       }else if($id== 1){ include "index.html";
        // PHP program to pop an alert 
        // message box on the screen 
        
        // Display the alert box 
        echo '<script>alert("INCORRECT CRIDENCIALS")</script>'; 
        
        
        }
     }





}}}
?>



</body>
</html>
