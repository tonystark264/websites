<!DOCTYPE html>
<html>
<head>
<title>Personal Profile</title>

<style>
body{
    font-family: Arial;
    background-color: lightblue;
    text-align:center;
}

img{
    border-radius:50%;
}
</style>

</head>

<body>

<h1>My Personal Profile</h1>

<img src="profile.jpg" width="150" height="150">

<p><b>Name:</b> Parth</p>

<p><i>Computer Engineering Student</i></p>

<a href="https://www.google.com">
Visit Google
</a>

<?php

date_default_timezone_set("Asia/Kolkata");

echo "<h3>Welcome User</h3>";

echo "Date and Time: ".
date("d-m-Y h:i:s A");

?>

</body>
</html>
