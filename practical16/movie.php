<!DOCTYPE html>
<html>
<head>

<title>Movie Booking</title>

<script>

function confirmBooking(){

alert("Booking Confirmed");

}

</script>

</head>

<body>

<h2>Movie Show Details</h2>

<table border="1">

<tr>
<th>Movie</th>
<th>Time</th>
</tr>

<tr>
<td>

<table border="1">
<tr>
<td>Avengers</td>
</tr>
</table>

</td>

<td>7 PM</td>

</tr>

</table>

<form method="POST">

Name:
<input type="text" name="name"><br><br>

<input type="submit"
onclick="confirmBooking()">

</form>

<?php

if($_POST){

echo "Booked By: ".$_POST['name'];

}

?>

</body>
</html>
