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
<script type="text/javascript"> 
		function preventBack() { 
			window.history.forward(); 
		} 
		
		setTimeout("preventBack()", 0); 
		
		window.onunload = function () { null }; 
	</script> 
</head>
<body>

<h2>Loan details</h2><br><br><br><br>

<a href="guarantor details.php"><button class="open-button" >Back</button></a>

<div class="form-popup" id="myForm">
  <form action="dbinsert loan details.php" class="form-container"  method="post" enctype="multipart/form-data">
    <h1>Loan details </h1>

    <label for=""><b>Are you sponsored by HESLB</b></label><br>
     <input type="radio" id="" name="fav_language" value="i'm sponsored by HESLB">
     <label for="heslb">YES</label><br>
     <input type="radio" id="" name="fav_language" value="not sponsored by HESLB">
    <label for="heslb">NO</label><br><br>

    <label for=""><b>Amount in words</b></label>
    <input type="text" placeholder="" name="amountwords" required>
    <label for=""><b>Rate </b></label>
    <select name="rate" id="rate" >
  <option value="0.30">30%</option>
  <option value="0.25">25%</option>
  <option value="0.20">20%</option>
  <option value="0.15">15%</option>
</select><br>
    <label for=""><b>Amount in digits</b></label>
    <input type="text" placeholder="" name="amountdigit"  id="amountdigit" onblur="getVal()" required><br><br>

    <label for=""><b id="notification"> </b></label>
<label for=""><b id="acumulated"> </b></label>
    
    <button type="submit" class="btn1">Save, and go Next</button>
  </form>
</div>



<script>



function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function getVal() {
        const val1 = document.getElementById("amountdigit").value;
        const val2 = document.getElementById("rate").value;
        const val11 = val1*val2;
        const val22 = val11+val1;


              document.getElementById("acumulated").innerHTML = val22;
              document.getElementById("notification").innerHTML = "Pay this amount before deadline: ";


        
        console.log(val1);
               console.log(val2);

      }



</script>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_popup_form by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:38:48 GMT -->
</html>


