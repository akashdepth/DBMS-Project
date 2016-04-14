<html>
<link rel="stylesheet" type="text/css" href="style3.css">
<body background="old_map.png"><br />
<?php
$var1=$_POST["Ground"];
$var2='Choose Ground';
$var3=$_POST["date1"];
$DBServer='localhost';
$DBUser='root';
$DBPass='';
$DBName='IPL2k16';
$conn=mysqli_connect($DBServer,$DBUser,$DBPass,$DBName);
?>
<?php
if(strcmp($var1,$var2)!=0)
{
$sql="select * from Matches,MatchAddress where Matches.AddressId like MatchAddress.AddressId and MatchAddress.AddressId like '$var1' ";
$records=$conn->query($sql);
$var9=0;
while($rows=mysqli_fetch_assoc($records))
{
$var9++;
}
$c=0;
if($var9==$c)
echo "<h1>No record found<h1 /><br />";
else
{
$records=$conn->query($sql);
if($records!=null)
{
echo "<h1>The List Of Matches on the Ground </h1>";
echo "<table border=1>";
echo "<tr><th>MatchId</th><th>Team1</th><th>Team2</th><th>DateOfEvent</th><th>GroundName</th></tr>";
echo "<br />";
while($row=mysqli_fetch_assoc($records))
{ 
$var5=$row['Team1'];
$sql1="select TeamName from Team where TeamId like '$var5' ";
$records1=mysqli_query($conn,$sql1);
$value1=mysqli_fetch_assoc($records1);

$var6=$row['Team2'];
$sql1="select TeamName from Team where TeamId like '$var6' ";
$records1=mysqli_query($conn,$sql1);
$value2=mysqli_fetch_assoc($records1);
echo "   ";
echo "<tr><td><r>{$row['MatchId']}</r></td><td><r>{$value1['TeamName']}</r></td><td><r>{$value2['TeamName']}</r></td><td><r>{$row['DateOfEvent']}</r></td><td><r>{$row['Address']}</r></td></tr>";
}
}
echo "</table>";
}
}
else
echo "You do not choose any ground";
?>
<?php
$var3=$_POST["date1"];
$DBServer='localhost';
$DBUser='root';
$DBPass='';
$DBName='IPL2k16';
$conn=mysqli_connect($DBServer,$DBUser,$DBPass,$DBName);
$sql="select * from Matches where Matches.DateOfEvent like '$var3' ";
$records2=mysqli_query($conn,$sql);
if($records2==false)
{
echo "No Match on that date";
}
else
{
while($rows=mysqli_fetch_assoc($records2))
{
$var2++;
}
if($var2==0)
{
echo "<x1 style=font-size:20px>No Record found </x1>";
}
else
{
echo "<h1>The List Of Matches On the selected date are</h1>";
echo "<table border=1>";
echo "<tr><th>MatchId</th><th>Team1</th><th>Team2</th><th>DateOfEvent</th>";
}
while($row2=mysqli_fetch_assoc($records2))
{ 
$var5=$row2['Team1'];
$sql1="select TeamName from Team where TeamId like '$var5' ";
$records1=mysqli_query($conn,$sql1);
$value1=mysqli_fetch_assoc($records1);
$var6=$row2['Team2'];
$sql1="select TeamName from Team where TeamId like '$var6' ";
$records1=mysqli_query($conn,$sql1);
$value2=mysqli_fetch_assoc($records1);
echo "<tr><td>{$row2['MatchId']}</td><td>{$row2['Team1']}</td><td>{$row2['Team2']}</td><td>{$row2['DateOfEvent']}</td></tr>";
}
}
echo "</table>";
?>
</body>
</html>


