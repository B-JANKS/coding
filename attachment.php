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

<h2>Attachments</h2><br><br><br><br>

<a href="loan details.php"><button class="open-button" >Back</button></a>

<div class="form-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Attachment details </h1>

    <input type="file" id="myFile" name="filename">

    
    <button type="submit" class="btn1">Save, and go Next</button>
  </form>
</div>



<script>



function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


</script>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_popup_form by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:38:48 GMT -->
</html>


