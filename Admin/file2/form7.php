<?php
$var1=$_POST['ChangePrice'];
$var2=$_POST['one'];
$con=mysqli_connect('localhost','root','','IPL2k16');
$sql="update Price set Price.Price='$var2' where PriceId like '$var1' ";
$record=mysqli_query($con,$sql);
echo "<script>alert('Updated'); window.open('http://localhost/Admin/file2/form5.php','_self','false');</script>";
?>
