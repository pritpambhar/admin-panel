<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form enctype="multipart/form-data" method="post">
<input type="file" name="txtfile" id="txtfile" />
<br />
<input type="text" name="txtname" id="txtname"/>
<br />
<input type="submit" value="add" />
</form>
<?php
		extract($_GET);
if(isset($_POST["txtname"]))
	{
		extract($_POST);
		//echo $txtname;
		extract($_FILES["txtfile"]);
		//echo $name;
		
	
		//print_r($_GET);
		//echo $ptid;
		move_uploaded_file($tmp_name,"images/".$name);
		$con=mysqli_connect("localhost","root","","homework");
		mysqli_query($con,"insert into category(category_name,category_image,product_type_id) values ('$txtname','$name','$ptid')");
		//header("location:data.php");
	}
	$con=mysqli_connect("localhost","root","","homework");
	$rs=mysqli_query($con,"select * from category where product_type_id='$ptid'");
	$a=mysqli_fetch_assoc($rs);
	//print_r($a);
	//extract($a);
	//echo $category_name;
	
	while($a=mysqli_fetch_assoc($rs))
	{
		extract($a);
		?>
        <table>
        	<tr>
            	<td><?php echo $category_id; ?></td>
                <td><?php echo $category_name; ?></td>
                <td><?php echo $category_image; ?></td>      
            </tr>
        </table>
        <?php
	}
	
?>
</body>
</html>