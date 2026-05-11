<!DOCTYPE html>
<html>
<head>

<title>School Admission</title>

<style>

body{
background-color:lightblue;
}

</style>

</head>

<body>

<h2 style="color:red;">
School Admission
</h2>

<img src="school.jpg" width="200">

<br><br>

<a href="https://cbse.gov.in">
CBSE Website
</a>

<form method="POST">

Student Name:
<input type="text" name="name">

<input type="submit">

</form>

<?php

if($_POST){

$name=$_POST['name'];

echo strtoupper($name);

}

?>

</body>
</html>
