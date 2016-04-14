<?php
require_once('connection.php');
$sql="SELECT Price FROM `Price`;";
$result = $conn->query($sql);
$price=array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

$price[]=$row['Price'];
}
}
if((int)$_SESSION['valid']==0)
{
echo "<a href='profile.php'>go your profile to see ticket details</a></br>Thank you for using our service.";
exit;
}
$_SESSION['valid']=0;
$amount=$price[(int)$_GET['Stand']-1];
$cardholdername=$_POST['holdername'];
$cvc=$_POST['cvc'];
$cardno=$_POST['cardno'];
$pin=$_POST['pin'];
$matchid=$_GET['matchId'];
$priceid=$_GET['Stand'];
$email=$_COOKIE[$cookie_name];;
$conn->autocommit(FALSE);
try{
$result=$conn->query("select balance from Account where cardno=$cardno and cvc=$cvc and holdername='$cardholdername' and pin='$pin';");
if($result->num_rows>0)
{
$row = $result->fetch_assoc();
if($row['balance']>=$amount)
{
$result=$conn->query("update Account set balance=balance-$amount where cardno=$cardno and cvc=$cvc and holdername='$cardholdername' and pin='$pin';");
$result=$conn->query("SELECT *FROM Seat where MatchId=$matchid");
$seat=$result->num_rows;
$seat=(int)$seat+1;
$result=$conn->query("insert into Seat values($seat,$matchid,$priceid,'$email')");
print "<font color='green'>$email </br> Transaction successfully </br> You got Seat No $seat Rs$amount is reduced from your account<br><a href='./creatEvent.php' style='float:right;'> Home</a></font>";
}
else
throw new Exception("<font color='red'>Insufficient Balance!!!</br><a href='creatEvent.php'>Try again</a></font></br>"); 
}
else
throw new Exception("<font color='red'>Wrong Account Details !!! </br><a href='creatEvent.php' color='red'>Try again</a></font></br>"); 
}
catch( Exception $e ){
print $e;
$conn->rollback();
}
if (!$conn->commit()) {
    print("Transaction commit failed\n");
    exit();
}

echo "<img src='./images/ipl.jpg'> </img>";
?>
