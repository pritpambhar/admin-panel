<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="txtfile" id="txtfile" />
<br />
<input type="text" name="txtname" id="txtname"/>
<br />
<input type="submit" value="add" />
</form>
<?php
	//print_r($_FILES);
	//echo "hello";
	if(isset($_POST["txtname"]))
	{
		move_uploaded_file($_FILES["txtfile"]["tmp_name"],"images/".$_FILES["txtfile"]["name"]);
		$con=mysqli_connect("localhost","root","","homework");
		mysqli_query($con,"insert into product_type(product_type_name,product_type_image) values ('".$_POST["txtname"]."','".$_FILES["txtfile"]["name"]."')");
		header("location:data.php");
	}
	
	
?>
</body>
</html>