<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css rel="stylesheet">
<body>
<div><center>
<nav class="navbar navbar-default">
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
<head><x1 style="left:50%;font-size:28px;"> Total Number of seats booked</x1>
</head>
<?php
$con=mysqli_connect("localhost","root","","IPL2k16");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT count(SeatNo) from Seat where Seat.Availabale like 1";
if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<x5 style=font-size:30px>    $rowcount</x5>";
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
</center>
</div>
</body>
<body  background="food.png">
<br />
<br />
<form action="form6.php" method="post">
<tag1 style="margin-left:2%">Select stadium and date to see number of seats booked</tag1>
<select name="Ground" id="Ground" style="margin-left:2%">
    <option value="Choose Ground " selected>Choose Ground</option>
    <option value="Wankhede Stadium, Mumbai">Wankhede Stadium, Mumbai</option>
    <option value="Eden Gardens, Kolkata">Eden Gardens, Kolkata</option>
    <option value="Punjab Cricket Association Stadium, Mohali">Punjab Cricket Association Stadium, Mohalit</option>
    <option value="M. Chinnaswamy Stadium, Bengaluru">M. Chinnaswamy Stadium, Bengaluru</option>
    <option value="M. Chinnaswamy Stadium, Bengaluru">M. Chinnaswamy Stadium, Bengaluru</option>
    <option value="Ferozeshah Kotla, Delhi">Ferozeshah Kotla, Delhi</option>
    <option value="Rajiv Gandhi International Cricket Stadium, Hyderabad">Rajiv Gandhi International Cricket Stadium, Hyderabad</option>
    <option value="MCA International Stadium, Pune">MCA International Stadium, Pune</option>
    <option value="Vidarbha Cricket Association Stadium, Nagpur">Vidarbha Cricket Association Stadium, Nagpur</option>
    <option value="TBC, TBC">TBC, TBC</option>
  </select>
<input type="date" style="margin-left:2%" name="date1" id="date1"></input>
<select name="Price" id="Price" style="margin-left:2%">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="All">All</option>
<input type="submit" style="margin-left:4%"></input>
<br />
<br />
<br />
<center>
<?php
$conn=mysqli_connect('localhost','root','','IPL2k16');
$sql="select * from Price";
$result=mysqli_query($conn,$sql);
echo "<br />";
echo "<label1 style=font-size:20px>Current Price Scheme</label1>";
echo "<br /><br />";
echo "<table border=1>";
echo "<tr><th>PriceId</th><th>Price</th></tr>";
while($employee=mysqli_fetch_assoc($result))
{
   echo "<tr><td>{$employee['PriceId']}</td><td>{$employee['Price']}</td></tr>";
}
echo "</table>";
?>
</center>
<br />
<br />
</form>
<tag2  style="background-color:#A1CAF1">
<form method="post" action=form7.php>
<tag1 style="margin-left:2%">Select PriceId and Its new Price</tag1>
<select name="ChangePrice" id="ChangePrice" style="margin-left:14%">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option></select>
<tag1 style="margin-left:7%"><input type=text name="one" id="one" placeholder="Price" ></input></tag>
<tag1 style="margin-left:29%"><input type=submit style="margin-left:30"></input></tag>
</form>
<script type="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
</tag2>
