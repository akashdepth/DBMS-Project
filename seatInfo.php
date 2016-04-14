<?php
require_once('connection.php');
$a=(int)$_GET['val'];;
$b=(int)$_GET['x'];
$c=0;
$sql="SELECT Stand$a FROM `Matches` WHERE MatchId=$b";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
if($row["Stand$a"]>0)
$c=$row["Stand$a"];
    }
if($c>0)
echo "<font color='green'><b>Stand$a av $c</b></font>";
else
echo "<font color='red'><b>Stand$a n/a</b></font>";

?>
