<html>
<body background="weather.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css rel="stylesheet">
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
	<div class="navbar-header" style="padding-left:2%">
		<a href="http://localhost/Admin/file2/form2.php" style="font-size:14px">Home</a>
	</div>

	<div class="nav navbar-nav">
	<ul class="nav navbar-nav">
	<li class="active">
		<a href="http://localhost/Admin/file2/form5.php" style="left:30%">Ticket And Finance</a>
	</li>
	<li >
	<a href="http://localhost/Admin/file2/userform.php" style="left:30%">User Information</a></li>
	<li >
	<a href="http://localhost/Admin/file2/form1.php" style="left:930%">Sign Out</a></li>
	</ul>
	</div>
	</div>
	</nav>
<h1 style=font-size:30px >Seat Available </h1>
<?php 
$var1=$_POST["Ground"];
$var2=$_POST["date1"];
$var3=$_POST["Price"];
$con=mysqli_connect("localhost","root","","IPL2k16");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(strcmp($var3,"All")==0)
{
$sql="select count(Seat.Availabale) as total from (Seat join Matches on Matches.MatchId like Seat.MatchId) join Ground on Ground.GroundId like Matches.AddressId where Seat.Availabale like 1 and Ground.GroundName like '$var1' and Matches.DateOfEvent like '$var2' ";
$records=mysqli_query($con,$sql);
while($res=mysqli_fetch_assoc($records))
{
$var3=$res['total'];
echo "\n\n";
echo "<h1 style=font-size:25px >Total number of seats available  in $var1 on $var2 is $var3</h1>"; 
}
}
else
{
$sql="select count(Seat.Availabale) as total from (Seat join Matches on Matches.MatchId like Seat.MatchId) join Ground on Ground.GroundId like Matches.AddressId where Seat.Availabale like 1 and Ground.GroundName like '$var1' and Matches.DateOfEvent like '$var2' and Seat.PriceId like $var3";
$records=mysqli_query($con,$sql);
while($res=mysqli_fetch_assoc($records))
{
$var3=$res['total'];
echo "\n\n";
echo "<h1 style=font-size:25px >Total number of seats available  in $var1 on $var2 is $var3</h1>"; 
}
}
?>
<?php
echo "<x2 style=font-size:25px>Price For first class</x2>";
mysqli_connect('localhost','root','','IPL2k16');
$sql="select Price.Price from Price where Price.PriceId like 1";
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($records))
{
$var3=$row['Price'];
print "<x2 style=font-size:25px>   is  $var3</x2>"; 
echo "<br />";
}
echo "<x2 style=font-size:25px>Price For second class</x2>";
$sql="select Price.Price from Price where Price.PriceId like 2";
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($records))
{
$var3=$row['Price'];
print "<x2 style=font-size:25px>   is  $var3</x2>"; 
echo "<br />";
}
echo "<x2 style=font-size:25px>Price For third class</x2>";
$sql="select Price.Price from Price where Price.PriceId like 3";
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($records))
{
$var3=$row['Price'];
print "<x2 style=font-size:25px>   is  $var3</x2>"; 
echo "<br />";
}
?>
</body>
</html>

