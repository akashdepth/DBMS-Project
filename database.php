<?php 
$host="172.31.80.218"; // Host name 
$username="amish"; // Mysql username 
$password="amish"; // Mysql password 
$db_name="MultiUserCalender"; // Database name 
$tbl_name="User"; // Table name

// Connect to server and select databse. 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Check if button name "Submit" is active, do this 
if(isset($_POST['Submit'])) { 
    foreach($_POST['id'] as $id) { 
        $onoff = 0;
        if (isset($_POST["ONOFF".$id])) {
            $onoff = 1;
        }
        if($onoff == 1) {
            $sql1="UPDATE ".$tbl_name." 
            SET Email='".$_POST["Email".$id]."',
                Fname='".$_POST["Fname".$id]."',
                Lname='".$_POST["Lname".$id]."',
                Gender='".$_POST["Gender".$id]."',
                DateOfBirth='".$_POST["DateOfBirth".$id]."',
                AddressId='".$_POST["AddressId".$id]."',
                Password='".$_POST["Password".$id]."',
                MobileNo='".$_POST["MobileNo".$id]."',
                AboutMe='".$_POST["AboutMe".$id]."',
                ONOFF='".$onoff."' WHERE id='".$id."'"; 
        } else {
            $sql1="UPDATE ".$tbl_name." SET ONOFF='".$onoff."' WHERE id='".$id."'"; 
        }
        $result1=mysql_query($sql1);
    } 
} 

//get data from DB
$sql="SELECT * FROM $tbl_name"; 
$result=mysql_query($sql); 

$count=mysql_num_rows($result); 
?> 
<strong>Update <strong class="highlight">multiple</strong> <strong class="highlight">rows</strong> <strong class="highlight">in</strong> <strong class="highlight">mysql</strong></strong><br> 

<table width="500" border="0" cellspacing="1" cellpadding="0"> 
    <form name="form1" method="post" action="<? echo $_SERVER['REQUEST_URL']; ?>"> 
        <tr> 
            <td> 
                <table width="500" border="0" cellspacing="1" cellpadding="0"> 
                    <tr> 
                        <td align="center" bgcolor="#FFFFFF"><strong>UserId</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>Fname</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>Lname</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>Gender</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>DateOfBirth</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>AddressId</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>Password</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>MobileNo</strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong>AboutMe</strong></td>
                    </tr> 
            <?php 
                while($rows=mysql_fetch_array($result))
                { 
            ?> 
            <tr> 
                <td align="center"><input type="hidden" name="id[]" value="<? echo $rows['id']; ?>" /><? echo $rows['id']; ?></td> 
                 <td align="center"><input name="Email<? echo $rows['id']; ?>" type="text" id="Email" value="<? echo $rows['Email']; ?>"></td>
                <td align="center"><input name="Fname<? echo $rows['id']; ?>" type="text" id="Fname" value="<? echo $rows['Fname']; ?>"></  td>
                <td align="center"><input name="Lname<? echo $rows['id']; ?>" type="text" id="Lname" value="<? echo $rows['Lname']; ?>"></  td> 
                <td align="center"><input name="Gender<? echo $rows['id']; ?>" type="text" id="Gender" value="<? echo $rows['Gender']; ?>"></   td>
                <td align="center"><input name="DateOfBirth<? echo $rows['id']; ?>" type="text" id="DateOfBirth" value="<? echo $rows['DateOfBirth']; ?>"></    td>
                <td align="center"><input name="AddressId<? echo $rows['id']; ?>" type="text" id="AddressId" value="<? echo $rows['AddressId']; ?>"></  td>
                <td align="center"><input name="Password<? echo $rows['id']; ?>" type="text" id="Password" value="<? echo $rows['Password']; ?>"></ td>
                <td align="center"><input name="MobileNo<? echo $rows['id']; ?>" type="text" id="MobileNo" value="<? echo $rows['MobileNo']; ?>"></ td>
                <td align="center"><input name="AboutMe<? echo $rows['id']; ?>" type="text" id="AboutMe" value="<? echo $rows['AboutMe']; ?>"></    td>     
                 <td align="center"><input name="ONOFF<? echo $rows['id']; ?>" type="checkbox" id="ONOFF" value="1" 
            <?php if ($rows['ONOFF'] ==1) { echo "checked";} else {} ?> 
                 </td> 
            </tr> 
            <?php 
                 } 
            ?> 
            <tr> <td colspan="4" align="center"><input type="submit" name="Submit" value="Submit"></td> </tr> 
            </table> 
            </td> 
        </tr> 
    </form> 
</table> 

<?php
mysql_close(); 
?>
