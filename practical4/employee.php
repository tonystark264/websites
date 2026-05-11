<!DOCTYPE html>
<html>
<head>

<title>Employee Registration</title>

<script>

function validate(){

let name=document.forms["empForm"]["name"].value;

if(name==""){
alert("Enter Name");
return false;
}

return true;

}

</script>

</head>

<body>

<form name="empForm"
method="POST"
onsubmit="return validate()">

<h2>Employee Registration</h2>

Name:
<input type="text" name="name">
<br><br>

Email:
<input type="email" name="email">
<br><br>

Designation:
<input type="text" name="designation">
<br><br>

<input type="submit" value="Register">

</form>

<?php

if($_POST){

echo "<h3>Employee Details</h3>";

echo "Name: ".$_POST['name']."<br>";

echo "Email: ".$_POST['email']."<br>";

echo "Designation: ".$_POST['designation'];

}

?>

</body>
</html>
