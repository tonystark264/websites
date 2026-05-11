<!DOCTYPE html>
<html>
<head>

<title>Hostel Registration</title>

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

<h2>Hostel Registration</h2>

Name:
<input type="text"
id="name"
name="name"><br><br>

Room Type:
<select name="room">
<option>Single</option>
<option>Double</option>
</select>

<br><br>

<input type="submit">

</form>

<?php

if($_POST){

echo "Allocated Room: "
.$_POST['room'];

}

?>

</body>
</html>
