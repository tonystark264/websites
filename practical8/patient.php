<!DOCTYPE html>
<html>
<head>

<title>Patient Appointment</title>

<script>

function validate(){

let name=
document.forms["patForm"]["name"].value;

if(name==""){
alert("Enter Patient Name");
return false;
}

return true;

}

</script>

</head>

<body>

<form name="patForm"
method="POST"
onsubmit="return validate()">

<h2>Patient Appointment</h2>

Name:
<input type="text" name="name">
<br><br>

Doctor:
<input type="text" name="doctor">
<br><br>

Date:
<input type="date" name="date">
<br><br>

<input type="submit" value="Book">

</form>

<?php

if($_POST){

echo "<h3>Appointment Details</h3>";

echo "Patient: ".$_POST['name']."<br>";

echo "Doctor: ".$_POST['doctor']."<br>";

echo "Date: ".$_POST['date'];

}

?>

</body>
</html>
