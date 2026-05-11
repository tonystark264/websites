<!DOCTYPE html>
<html>
<head>

<title>Shopping Registration</title>

<style>

body{
font-family:Arial;
}

</style>

<script>

function validate(){

let name=
document.getElementById("name").value;

if(name==""){
alert("Enter Name");
return false;
}

return true;

}

</script>

</head>

<body>

<form method="POST"
onsubmit="return validate()">

<h2>Shopping Registration</h2>

Name:
<input type="text"
id="name"
name="name"><br><br>

Email:
<input type="email"
name="email"><br><br>

<input type="submit">

</form>

<?php

if($_POST){

echo "Name: ".$_POST['name']."<br>";

echo "Email: ".$_POST['email'];

}

?>

</body>
</html>
