<!DOCTYPE html>
<html>
<head>

<title>Course Enrollment</title>

<style>

table,th,td{
border:1px solid black;
border-collapse:collapse;
padding:10px;
}

</style>

</head>

<body>

<h2>Course Details</h2>

<table>

<tr>
<th>Course</th>
<th>Duration</th>
</tr>

<tr>
<td>PHP</td>
<td>3 Months</td>
</tr>

<tr>
<td>Java</td>
<td>4 Months</td>
</tr>

</table>

<br>

<form method="POST">

Enter Course:
<input type="text" name="course">

<input type="submit" value="Enroll">

</form>

<?php

if($_POST){

echo "<h3>Enrolled Course: "
.$_POST['course']."</h3>";

}

?>

</body>
</html>
