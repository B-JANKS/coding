<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
h2{   position: fixed;
}


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: auto;
  right: auto;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: absolute;
  top: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.education_details {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 8;
}

/* Add styles to the form container */
.form-container {
  max-width: 70vw;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.btn1 {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 15px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.search {
  width: 80vw;
  position: absolute;
  top: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

#demo{ display: none;}

.fa-solid{
  font-size: 20px;
  align-items: center;
  justify-items: center;
  margin: 2px;
  padding: 2px;
  color: #4CAF50;
}
</style>
</head>
<body onload="getAppcode()">

<h2>Loan Application Form</h2><br><br><br><br>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="dbinsert basic info.php" class="form-container" method="post" enctype="multipart/form-data">
    <h1 name="jina">Personal information </h1>

    <label for=""><b>First name</b></label>
    <input type="text" placeholder="eg  JOHN" name="fname" onkeyup= "myFunction()" id="upper" required>

    <label for=""><b>Second Name</b></label>
    <input type="text" placeholder="eg LUCAS" name="sname" onkeyup= "myFunction2()" id="upper2"required>

    <label for=""><b>Surname </b></label>
    <input type="text" placeholder="eg SAJUKI" name="lname" onkeyup= "myFunction3()" id="upper3" required>

    <label for=""><b>Gender</b></label><br>
     <input type="radio" id="" name="fav_language" value="M">
     <label for="male">Male</label><br>
     <input type="radio" id="" name="fav_language" value="F">
    <label for="female">Female</label><br><br>

    <label for=""><b>Date of birth </b></label>
    <input type="text" placeholder="eg dd/mm/yy" name="birth" required>

    <label for=""><b>National Identity Number </b></label>
    <input type="text" placeholder="" name="nin" pattern="(?=.*\d).{20,}" title="input a valid NIN number" required>

    <label for=""><b>Phone number </b></label>
    <input type="text" placeholder="eg +255-xxxxxxxx" name="phone" pattern="(?=.*\d).{13,}" title="input a valid mobile number" required>

    <label for=""><b>Email </b></label>
    <input type="text" placeholder="eg example12@gmail.com" name="email" required>
    <p id="demo" name="appcode" ></p>

    <button type="submit" class="btn" >Save, and go Next</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

  </form>
</div>



<br><br><br><div class="search" id="search">
<h2>Search a form</h2>
<br><br><br>
<input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search by form ID.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:10%;">AppCode</th>
    <th style="width:10%;">First Name</th>
    <th style="width:10%;">Last Name</th>
    <th style="width:10%;">Gender</th>
    <th style="width:10%;">Phone</th>
    <th style="width:20%;">Email</th>
    <th style="width:15%;">cdate</th>
    <th style="width:15%;">Action</th>

  </tr>
  

  <?php 
                include"dbconn.php";
                $sql1 = "SELECT *FROM loan ORDER BY id DESC ";
                $res1 = mysqli_query($conn, $sql1); 
        
                if (mysqli_num_rows($res1) > 0) {
                    while ($images1 = mysqli_fetch_assoc($res1)) {
                     foreach ($res1 as $row) {
                                                     
               ?>
            <tr>
            <td><?=$row['appCode']?></td>
            <td><?=$row['first_name']?></td>
            <td><?=$row['sur_name']?></td>
            <td><?=$row['gender']?></td>
            <td><?=$row['phone']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['adminstration']?></td>
            <td>
            <?php 
             if($row['institute']=="" ||$row['program']=="" ||$row['lnumber']=="" ||$row['level_']=="" ){
              ?>
              <a href="#"><i class="fa-solid fa-eye"></i></a>
              <?php 
             }else{
              ?>
              <p>Completed</p>
              <?php 
             }


              ?>
            </td>


            </tr>


      <?php   
          }
       
           }
             } ?>
 
  
</table>

</div>



<script>
 

function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("search").style.display = "none";


}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("search").style.display = "block";

}

function myFunction() {
  let x = document.getElementById("upper");
  x.value = x.value.toUpperCase();
}
function myFunction2() {
  let x = document.getElementById("upper2");
  x.value = x.value.toUpperCase();
}
function myFunction3() {
  let x = document.getElementById("upper3");
  x.value = x.value.toUpperCase();
}

function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function getAppcode(){
  let xy ;
var see=document.getElementById("demo").innerText = Math.floor((Math.random() * 1000000) + 1) ;
console.log(see);
}
</script>


</body>

</html>