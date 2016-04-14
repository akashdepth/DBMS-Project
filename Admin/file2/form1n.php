<?php
$DBServer='localhost';
$DBUser='root';
$DBPass='';
$DBName='login';
$username=$_POST["textField"];
$dbpassword=$_POST["Password"];
$conn=mysqli_connect($DBServer,$DBUser,$DBPass,$DBName);
if($conn->connect_error)
trigger_error('Database connection failed');
else
{
$sql ="SELECT * from login_info";
$records=$conn->query($sql);
while($employee=mysqli_fetch_assoc($records))
{
	$user = $employee['username'];
	$pass=$employee['Pass_d'];
	if($user==$username && $pass==$dbpassword)
	{
		header("Location: form2.php"); 
   		exit;
	}
}
	header("Location: form1.php"); 
   	exit;
}
?>
