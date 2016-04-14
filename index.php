<?php
if(isset($_COOKIE['iplt20'])) {
header('Location: '.'creatEvent.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>IPL 2k16</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>


<div class="container">
<div class="row">
<div class="col-sm-7" style="background-color:lavender;">
<img src="images/ipl.jpg" alt="Mountain View" style="width:704px;height:428px;">
<h1> BOOK YOUR TICKETS ONLINE<h1>
<h1>SAFE AND SECURE !!!<h1>
<!-- -->







<!-- -->
</div>
<div class="col-sm-5" style="background-color:lavenderblush;">

<button type="button" class="btn btn-default" id="login" data-toggle="modal" data-target="#myModal" style="float:right">Login</button>
<!-- Email,Fname,Lname,Gender,DateOfBirth,AddressId,Password,MobileNo,AboutMe -->
</br></br>
<form role="form" method="post" action="signup.php">
<div class="form-group">
<label for="Fname">First Name:</label>
<input type="text" class="form-control" name="Fname" id="Fname" placeholder="First Name">
</div>
<div class="form-group">
<label for="Lname">Last Name</label>
<input type="text" class="form-control" name="Lname" id="Lname" placeholder="Last Name">
</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" id="email" name="Email" placeholder="Enter email">
</div>
<div class="form-group" ><label for="DateOfBirth">DateOfBirth:</label><input type="date" class="form-control" name="DateOfBirth"></div>
<div class="form-group" ><label for="gender">Gender:</label>
<input type="radio" name="Gender" value="male" checked> Male
<input type="radio" name="Gender" value="female"> Female
</div>

<div class="form-group">
<label for="mobilenumber">MobileNumber:</label>
<input type="text" class="form-control" id="MobileNo" name="MobileNo" placeholder="Enter Your Mobile No">
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="form-control" id="pwd" name="Password" placeholder="Enter password">
</div>
<div class="form-group">
<label for="pwd">ReType Password:</label>
<input type="password" class="form-control" id="repwd" name="RePassword" placeholder="ReEnter password">
</div>




<div class="checkbox">
<label><input type="checkbox" name="Check"><a>Accept all terms and conditions</a></label>
</div>
<button type="submit" class="btn btn-default" style="float: right">Submit</button>
</form>



</div>
</div>


</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-body">

<form method="post" action="login.php">
<div class="form-group">
<label>Email:</label>
<input type="text" name="Email" class="form-control" placeholder="Email"><br>
</div>
<div class="form-group">
<label>Password:</label>
<input type="password" name="Password" placeholder="password" class="form-control"><br>
</div>
<div class="form-group">
<label>
<input type="submit" value="Submit" class="form-control">
</label>
</div>
</form>

</div>
</div>
</div>
</div>
</body>
</html>

