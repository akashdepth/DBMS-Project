<html>
<body>
Hello
<?php
$DBServer='localhost';
$DBUser='root';
$DBPass='';
$DBName='login';
$username='admin';
$dbpassword='1234';
$conn=mysqli_connect($DBServer,$DBUser,$DBPass,$DBName);
$sql ="SELECT * from login_info";
if($conn->connect_error)
{
echo "Error";
}
else
{
echo "Hello";
$records=$conn->query($sql);
while($employee=mysqli_fetch_assoc($records))
{
	$user = $employee['username'];
	$pass=$employee['Pass_d'];
	if($user==$username && $pass==$dbpassword)
	{        echo "Hello";
		//header("Location: form2.php"); 
   		//exit;
	}
}
          echo "Hello";
	//header("Location: form3.php"); 
   	//exit;
}
?>
</body>
</html>
