<?php
session_start();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="1.css" />

<style type="text/css">
<!--
.style2 {font-family: Arial}
-->
</style>
</head>
<body>

<?php
if(!empty($_REQUEST['btn_sub']))
{   
	include("db.php");
    $dir="./upload";
	$img=$dir."/".$_FILES['fileup']['name'];
	move_uploaded_file($_FILES['fileup']['tmp_name'],$dir."/".$_FILES['fileup']['name']) or die("upload error");
	$q3="SELECT MAX(sno) FROM login";
	$r = mysql_query($q3)or die("Query fail");
	$rec = mysql_fetch_array($r);
	if($rec['0']== 0 || $rec['0'] == NULL)
	{
		$sno=1;
	}
	else
	{
		$sno=$rec['0']+1;
	}
	$q="INSERT INTO login values('$sno','".$_REQUEST['username']."','".$_REQUEST['password']."')";
	$q1="INSERT INTO user values('$sno','".$_REQUEST['firstname']."','".$_REQUEST['lastname']."','".$_REQUEST['sex']."','".$_REQUEST['username']."','".$_REQUEST['password']."','".$_REQUEST['state']."','".$_REQUEST['country']."')";
	$q2="INSERT INTO image values('$sno','$img')";
	mysql_query($q) or die(mysql_error());
	mysql_query($q1) or die(mysql_error());
		mysql_query($q2) or die(mysql_error());
	header("Location:index.php");

}
else
{
	
?>
 <div class="style2" id="header">
 <h1 align="center"><div id="wrapper">
     <br />
     <span class="style2">University Management System </span><br />
</h1>
 <p><br />
 </p>
 <form name="myform" method="post" action="#" enctype="multipart/form-data">
<table>
   <tr>
   <td>
   <h3 align="left" class="style3" id="user">First Name</h3></td>
   <td><input type="text" name="firstname" id="search-text" value="" /></td></tr>
  <tr><td><h3 align="left" class="style3" id="user">Last Name</h3></td>
  <td><input type="text" name="lastname" id="search-text" value="" /></td></tr>
  <tr>
<td> <h3 align="left" id="user">Sex</h3></td>
<td><select name="sex" size="1" id="search-text">
<option value="male">Male</option>
<option value="female">Female</option>
</select></td>
</tr>


<tr>
   <td>
   <h3 align="left" class="style3" id="user">User Name</h3></td>
   <td><input type="text" name="username" id="search-text" value="" /></td></tr>
  <tr><td><h3 align="left" class="style3" id="user">Password</h3></td>
  <td><input type="password" name="password" id="search-text" value="" /></td></tr>

<tr><td><h3 align="left" class="style3" id="user">Retype Password</h3></td>
  <td><input type="password" name="rpassword" id="search-text" value="" /></td></tr>
  <tr>
<td> <h3 align="left" id="user">State</h3></td>
<td><select name="state" size="1" id="search-text">
<option value="0">select</option>
<option value="Andhrapradesh">Andhra Pradesh</option>
<option value="orissa">Orissa</option>
<option value="karnataka">Karnataka</option>
<option value="kerala">Kerala</option>
<option value="Delhi">Delhi</option>
<option value="tamilnadu">Tamilnadu</option>
<option value="up">Uttar Pradesh</option>
<option value="mp">Madya Pradesh</option>
<option value="maharastra">Maharastra</option>

</select></td></tr>
  <tr>
<td> <h3 align="left" id="user">Country</h3></td>
<td><select name="country" size="1" id="search-text">
<option value="0">select</option>
 <option value="America">America</option>
<option value="Bankok">Bankok</option>
<option value="Canada">Canada</option>
<option value="Dubai">Dubai</option>
<option value="Ezrail">Ezrail</option>
<option value="Finland">Finland</option>
<option value="Germany">Germany</option>
<option value="Hongkong">Hongkong</option>
<option value="India">India</option>
</select></td>
</tr>
<tr>
<td><h3 align="left" id="user">Image</h3></td>
<td><input type="file" name="fileup"/></td></tr>

</table>
<table><br />
<tr>
<td><input type="submit" name="btn_sub" value="Create account" id="search-tex"></td>
</tr>
</table></form>
<?php }  ?>
</body>
</html>
