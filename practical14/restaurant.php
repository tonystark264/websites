<!DOCTYPE html>
<html>
<head>

<title>Restaurant Menu</title>

<style>

table,th,td{
border:1px solid black;
padding:10px;
}

</style>

</head>

<body>

<h2>Restaurant Menu</h2>

<table>

<tr>
<th>Item</th>
<th>Image</th>
</tr>

<tr>
<td>Pizza</td>
<td>
<img src="pizza.jpg" width="100">
</td>
</tr>

</table>

<br>

<a href="https://zomato.com">
Visit Zomato
</a>

<?php

$menu=array("Pizza","Burger","Pasta");

echo "<h3>Menu Items</h3>";

foreach($menu as $item){

echo $item."<br>";

}

?>

</body>
</html>
