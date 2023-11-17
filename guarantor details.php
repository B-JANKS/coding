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
  position: absolute;
  top: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  overflow-y: scroll;

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
</style>
</head>
<body>

<h2>Guarantor information</h2><br><br><br><br>

<a href="education details.php"><button class="open-button" >Back</button></a>

<div class="form-popup" id="myForm">
  <form action="dbinsert guarantor infos.php" class="form-container" method="post" enctype="multipart/form-data">
    <h1>Guarantor informations </h1>

    <label for=""><b>First name</b></label>
    <input type="text" placeholder="eg  BALAMU" name="gfname" onkeyup= "myFunction()" id="upper" required>

    <label for=""><b>Second Name</b></label>
    <input type="text" placeholder="eg IBRAHIMU" name="gsname" onkeyup= "myFunction1()" id="upper1" required>

    <label for=""><b>Last Name </b></label>
    <input type="text" placeholder="" name="glname" onkeyup= "myFunction2()"id="upper2" required>
    <label for=""><b>Gender</b></label><br>
     <input type="radio" id="" name="fav_language" value="M">
     <label for="male">Male</label><br>
     <input type="radio" id="" name="fav_language" value="F">
    <label for="female">Female</label><br><br>
    <label for=""><b>University name</b></label>
    <input type="text" placeholder="eg  NATIONAL INSTITUTE OF TECHNOLOGY" name="ginstitute" id="upper3" onkeyup= "myFunction3()" required>

    <label for=""><b>Program Name</b></label>
    <input type="text" placeholder="eg COMPUTER SCIENCE" name="gprogram" onkeyup= "myFunction4()" id="upper4"required>

    <label for=""><b>Registration Number </b></label>
    <input type="text" placeholder="" name="gregno" pattern="(?=.*\d).{15,}" title="input a valid registration number" required>

    <label for=""><b>Level </b></label>
    <select name="glevel" id="level">
    <option value="level4">NTA Level 4</option>
  <option value="level5">NTA Level 5</option>
  <option value="level6">NTA Level 6</option>
  <option value="level7">NTA Level 7</option>
  <option value="level8">UQF Level 8</option>
</select><br>
    <label for=""><b>Year of study </b></label>
    <input type="text" placeholder="" name="gyear" required>

    <label for=""><b>National Identity Number </b></label>
    <input type="text" placeholder="" name="gnin" pattern="(?=.*\d).{20,}" title="input a valid NIN number" required>

    <label for=""><b>Phone number </b></label>
    <input type="text" placeholder="eg +255-xxxxxxxx" name="gphone" pattern="(?=.*\d).{13,}" title="input a valid mobile number" required>
  
    
    <button type="submit" class="btn1">Save, and go Next</button>
  </form>
</div>



<script>



function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function myFunction() {
  let x = document.getElementById("upper");
  x.value = x.value.toUpperCase();
}

function myFunction1() {
  let x = document.getElementById("upper1");
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
function myFunction4() {
  let x = document.getElementById("upper4");
  x.value = x.value.toUpperCase();
}

</script>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_popup_form by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:38:48 GMT -->
</html>


