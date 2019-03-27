<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
	
		//move_uploaded_file($_FILES["txtfile"]["tmp_name"],"images/".$_FILES["txtfile"]["name"]);
		$con=mysqli_connect("localhost","root","","homework");
		mysqli_query($con,"delete from product_type where product_type_id='".$_GET["ptid"]."'");
		header("location:data.php");
?>
</body>
</html>