<?php
require_once "connection.php";
if(!isset($_COOKIE[$cookie_name])) {
header('Location: '.'index.php');
}
$sql = "select Team1 ,Team2,MatchAddress.Address as Address ,DateOfEvent from Matches,MatchAddress where Matches.AddressId=MatchAddress.AddressId;";
$result = $conn->query($sql);
$matches=array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$matches[]=$row;
    }
}
$sql="SELECT TeamName FROM `Team`;";
$result = $conn->query($sql);
$teams=array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

$teams[]=$row['TeamName'];
}
}
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>change picture</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>      <script type="text/javascript">


  var xhttp=[];

  xhttp[1] = new XMLHttpRequest();
  xhttp[2] = new XMLHttpRequest();
  xhttp[3] = new XMLHttpRequest();
  xhttp[4] = new XMLHttpRequest();
var  x = 0;
function seatInfo(var1) {
  xhttp[var1].onreadystatechange = function() {
    if (xhttp[var1].readyState == 4 && xhttp[var1].status == 200) {
      document.getElementById(var1).innerHTML = xhttp[var1].responseText;
    }
  };
  xhttp[var1].open("GET", "seatInfo.php?val="+var1+"&&x="+x, true);
  xhttp[var1].send();
}


       function logout() {
        $(function() {
            location.href = 'logout.php';
        });
    }
       function ground() {
        $(function() {
            location.href = 'seat.php';
        });
    }

var js_array = <?php echo json_encode($matches);?>;
var team = [], y=-1;
team=<?php echo json_encode($teams);?>;       
          function displayNextImage() {
              
              x = (x === js_array.length - 1) ? 0 : x + 1;
      
              document.getElementById("img1").src = images[js_array[x].Team1];
              document.getElementById("img3").src = images[js_array[x].Team2];
              document.getElementById("date").innerHTML = "<b>"+js_array[x].DateOfEvent+"</b>";
              document.getElementById("address").innerHTML = "<b>"+js_array[x].Address+"</b>";
              document.getElementById("team").innerHTML = "<b>"+team[js_array[x].Team1]+" vs " + team[js_array[x].Team2]+"</b>";
              seatInfo(1);
              seatInfo(2);
              seatInfo(3);
              seatInfo(4);


          }

          function displayPreviousImage() {
              x = (x <= 0) ? js_array.length - 1 : x - 1;
              document.getElementById("img1").src = images[js_array[x].Team1];
              document.getElementById("img3").src = images[js_array[x].Team2];
              document.getElementById("date").innerHTML = "<b>"+js_array[x].DateOfEvent+"</b>";
              document.getElementById("address").innerHTML = "<b>"+js_array[x].Address+"</b>";
              document.getElementById("team").innerHTML = "<b>"+team[js_array[x].Team1]+" vs " + team[js_array[x].Team2]+"</b>";

              seatInfo(1);
              seatInfo(2);
              seatInfo(3);
              seatInfo(4);
          }
var flag=0;
var myVar;
          function startTimer() {
              if(flag==0)           
              myVar=setInterval(displayNextImage, 3000);
              
          }

          function stopTimer()
          {
                if(flag==0)
                clearInterval(myVar);
          
          }


function select(var1)
{
stopTimer();
flag=var1;
document.getElementById("select").innerHTML = "<b> You selected Stand"+var1+"</br><a href='onlinesbi.php?matchId="+x+"&&Stand="+flag+"'>Book Now</a></b>";
}


          var images = [];
          images[0] = "images/delhi.jpg";
          images[1] = "images/gujrat.jpg";
          images[2] = "images/mumbai.jpg";
          images[3] = "images/rcb.jpg";
          images[4] = "images/rps.jpg";
          images[5] = "images/kx1.jpg";
          images[6] = "images/kkr.jpg";
          images[7] = "images/shed.jpg"
          images[8] = "images/tbt.png";
          
      </script>
   </head> 
   <body onload="startTimer();displayNextImage();">

<div class="container-fluid">

  <div class="row" >
    <div class="col-sm-2" name="1" id="1" title="Stand 1" onclick="select(1);" style="background-color:lavenderblush;height:50px;" data-toggle="modal" data-target="#myModal1"">Stand 1</div>
    <div class="col-sm-2" name="2" id="2" title="Stand 2" onclick="select(2);" style="background-color:lavenderblush;height:50px;" data-toggle="modal" data-target="#myModal2">Stand 2</div>
    <div class="col-sm-2" name="3" id="3" title="Stand 3" onclick="select(3);" style="background-color:lavenderblush;height:50px;" data-toggle="modal" data-target="#myModal3">Stand 3</div>
    <div class="col-sm-2" name="4" id="4" title="Stand 4" onclick="select(4);" style="background-color:lavenderblush;height:50px;" data-toggle="modal" data-target="#myModal4">Stand 4</div>
    <div class="col-sm-2" name="select" id="select" style="background-color:lavenderblush;height:50px;"><font color="red">You did not select any stand</font></div>
    <div class="col-sm-2" style="background-color:lavenderblush;height:50px;"><a href="profile.php" title="profile"><?php echo $_COOKIE[$cookie_name]; ?></a></br><a href="logout.php" title="LOgOut">LOgOut</a></div>

   </div>
<a href="#" onclick="stopTimer();flag=-1;">
<div class="row"  title="Match is selected" onmouseover="stopTimer();" onmouseout="startTimer();" style="cursor:hand;">    
    <div class="col-sm-4">     
      <img id="img1" src="./images/rps.jpg" style="height:400px;width:250px;float:left;top:"> 
    </div>
    <div class="col-sm-4"> 
     <img id="img2" src="./images/vs.png"  style="height:400px;width:250px;">
    </div>
    <div class="col-sm-4"> 
       <img id="img3" src="./images/gujrat.jpg" style="height:400px;width:250px;float:right;">

    </div>

    


</div>
</a>
<div class="row">

<button type="button" onclick="displayPreviousImage()" class="btn btn-default" style="height:50px; width:150px;float:left;"><b>Previous</b></button>
<button type="button" onclick="displayNextImage()" class="btn btn-default" style="height:50px; width:150px;float:right;"><b>Next</b></button>
</div>


   <div class="row" >
    <div class="col-sm-4"  style="background-color:lavenderblush;height:50px;"><p id="date" name="date">Date Is Here<p></div>
    <div class="col-sm-4"  style="background-color:lavenderblush;height:50px;"><p id="address" name="address">Address Is Here </p></div>
    <div class="col-sm-4" style="background-color:lavenderblush;height:50px;"><p id="team" name="team">Team1 vs Team2 </p></div>
   </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
<div class="modal-dialog">
<img  src="./images/warner.jpeg"> 
</div>
</div>


<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog">
<img  src="./images/Tervin.jpg""> 
</div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
<div class="modal-dialog">
<img  src="./images/Stage.jpg""> 
</div>
</div>

<div class="modal fade" id="myModal4" role="dialog">
<div class="modal-dialog">
<img  src="./images/Lawn.jpg"> 
</div>
</div>


</body>
</html>
