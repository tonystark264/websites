<!DOCTYPE html>
<html>
<head>

<title>Student Registration</title>

<style>

body{
    font-family: Arial;
    background-color: lightgray;
}

form{
    width:300px;
    margin:auto;
}

</style>

<script>

function validate(){

let name =
document.forms["myForm"]["name"].value;

let mobile =
document.forms["myForm"]["mobile"].value;

if(name==""){
    alert("Enter Name");
    return false;
}

if(mobile.length!=10){
    alert("Mobile number must be 10 digits");
    return false;
}

return true;

}

</script>

</head>

<body>

<form name="myForm"
method="POST"
onsubmit="return validate()">

<h1>Student Registration</h1>

Name:
<input type="text" name="name">
<br><br>

Email:
<input type="email" name="email">
<br><br>

Gender:
<input type="radio"
name="gender"
value="Male">Male

<input type="radio"
name="gender"
value="Female">Female

<br><br>

DOB:
<input type="date" name="dob">
<br><br>

Mobile:
<input type="text" name="mobile">
<br><br>

<input type="submit" value="Submit">

</form>

<?php

if($_POST){

echo "<h3>Submitted Details</h3>";

echo "Name: ".$_POST['name']."<br>";

echo "Email: ".$_POST['email']."<br>";

echo "Gender: ".$_POST['gender']."<br>";

echo "DOB: ".$_POST['dob']."<br>";

echo "Mobile: ".$_POST['mobile']."<br>";

}

?>

</body>
</html>
