<?php
require_once('connection.php');
$cookie_value = $_POST['Email'];
$email=$_POST['Email'];
$password=md5($_POST['Password']);
$sql="select *from User where Email='$email' and Password='$password';";
$result = $conn->query($sql);
if($result->num_rows>0)
{
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
header('Location: '.'creatEvent.php');
}
else
echo "<font color='red'> <b>You Entered wrong Email or Password <a href='index.html'>Try Again Please</a></font>";
?>
