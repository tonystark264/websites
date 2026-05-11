<!DOCTYPE html>
<html>
<head>

<title>Bank Form</title>

<script>

function calculate(){

let p=parseInt(document.getElementById("amount").value);

let r=5;

let t=2;

let si=(p*r*t)/100;

document.getElementById("result").innerHTML=
"Interest: "+si;

}

</script>

</head>

<body>

<form method="POST">

<h2>Bank Customer Form</h2>

Name:
<input type="text" name="name"><br><br>

Amount:
<input type="number" id="amount" name="amount"><br><br>

<button type="button" onclick="calculate()">
Calculate Interest
</button>

<p id="result"></p>

<input type="submit">

</form>

<?php

if($_POST){

echo "Name: ".$_POST['name']."<br>";

echo "Amount: ".$_POST['amount'];

}

?>

</body>
</html>
