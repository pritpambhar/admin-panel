<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="addProductType.php">
	<input type="submit" value="add to product_type" />
</form>
<?php
	$con=mysqli_connect("localhost","root","","homework");
	$rs=mysqli_query($con,"select * from product_type");
	
	//print_r($a);
	echo "<table>";
	while($a=mysqli_fetch_assoc($rs))
	{
		echo "<tr>";
		echo "<td>".$a["product_type_id"]."</td>";
		echo "<td>".$a["product_type_name"]."</td>";
		echo "<td>".$a["product_type_image"]."</td>";
		
		echo "<td><a href='editProductType.php ? ptid=".$a["product_type_id"]."'><img src='images/edit.png' width='20'/></a></td>";
		echo "<td><a href='deleteProductType.php ? ptid=".$a["product_type_id"]."'><img src='images/del.png' width='20'/></a></td>";
		echo "<td><a href='category.php ? ptid=".$a["product_type_id"]."'><img src='images/view.png' width='20'/></a></td>";
		
		echo "</tr>";
		
	}
	echo "</table>";
?>