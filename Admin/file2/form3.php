<?php
$DBServer='localhost';
$DBUser='root';
$DBPass='';
$DBName='IPL2k16';
$username=$_POST["textField"];
$dbpassword=$_POST["Password"];
$conn=mysqli_connect($DBServer,$DBUser,$DBPass,$DBName);
$sql ="SELECT * from login_info";
$records=$conn->query($sql);
while($employee=mysqli_fetch_assoc($records))
{
	$user = $employee['username'];
	$pass=$employee['pass_d'];
	if($user==$username && $pass==$dbpassword)
	{
		header("Location: form2.php"); 
   		exit;
	}
}       echo $user;
	header("Location: form1.php"); 
   	exit;
    
?>
