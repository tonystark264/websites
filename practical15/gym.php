<!DOCTYPE html>
<html>
<head>

<title>Gym Membership</title>

<script>

function validate(){

let mobile=
document.getElementById("mobile").value;

if(mobile.length!=10){
alert("Enter valid mobile");
return false;
}

return true;

}

</script>

</head>

<body>

<form method="POST"
onsubmit="return validate()">

<h2>Gym Registration</h2>

Email:
<input type="email" name="email"><br><br>

Mobile:
<input type="text" id="mobile"><br><br>

<input type="submit">

</form>

<?php

$plans=array("Silver","Gold","Platinum");

echo "<h3>Membership Plans</h3>";

foreach($plans as $plan){

echo $plan."<br>";

}

?>

</body>
</html>
