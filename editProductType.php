<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","homework");
$rs=mysqli_query($con,"select * from product_type where product_type_id='".$_GET["ptid"]."'");
$a=mysqli_fetch_assoc($rs);
//print_r($_POST);
//print_r($a);
if(isset($_POST["txtname"]))
	{
		move_uploaded_file($_FILES["txtfile"]["tmp_name"],"images/".$_FILES["txtfile"]["name"]);
		mysqli_query($con,"update product_type set product_type_name='".$_POST["txtname"]."',product_type_image='".$_FILES["txtfile"]["name"]."' where product_type_id='".$_GET["ptid"]."'");
		header("location:data.php");
	}
?>
<form method="post" enctype="multipart/form-data">
<label for="txtfile"><img src="images/<?php echo $a["product_type_image"];?>" width='100'/></label>
<input type="file" name="txtfile" id="txtfile" display="none"/>
<br />
<input type="text" name="txtname" id="txtname" value="<?php echo $a["product_type_name"];?>"/>
<br />
<input type="submit" value="add" />
</form>
</body>
</html>