<!DOCTYPE html>
<html>
<head>

<title>Event Registration</title>

<script>

function validate(){

let name=
document.forms["eventForm"]["name"].value;

if(name==""){
alert("Enter Name");
return false;
}

alert("Registration Successful");

return true;

}

</script>

</head>

<body>

<form name="eventForm"
method="POST"
onsubmit="return validate()">

<h2>Event Registration</h2>

Name:
<input type="text" name="name">
<br><br>

Email:
<input type="email" name="email">
<br><br>

Event:
<input type="text" name="event">
<br><br>

<input type="submit" value="Register">

</form>

<?php

if($_POST){

echo "<h3>Registration Details</h3>";

echo "Name: ".$_POST['name']."<br>";

echo "Email: ".$_POST['email']."<br>";

echo "Event: ".$_POST['event'];

}

?>

</body>
</html>
