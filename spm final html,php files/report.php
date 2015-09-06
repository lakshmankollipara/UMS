<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="1.css" />

<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 36px;
}
.style2 {font-size: 36px}
-->
</style>
</head>

<body>
<div class="style2" id="header">
  <div align="center"><span class="style1">University Management System</span></div>
</div>
	   
   <div id="wrapper">
		
     <div id="navigation"></div>
         <div align="center">
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p><br />
             <img src="spm/det-student-portal-login-page.jpg" width="345" height="202" />           </p>
           <p>&nbsp;</p>
           <table width="575" border="0">
             <tr>
               <td width="135"><h2><a href="themes.php">View details</a></h2></td>
               <td width="155"><h2><a href="update.php">Updatedetails</a></h2></td>
               <td width="132"><h2><a href="report.php">View  report</a></h2></td>
               <td width="135"><h2><a href="index.php" title="">logout</a></h2></td>
             </tr>
           </table>
           <p>&nbsp;</p>
		   <form name="form1" id="form1" method="post" action="#">
           <p align="center">Enter Sno:
               <input type="text" name="sno" />
           </p>
          
             <p align="center">
               <input type="submit" name="btn" value="Submit" />
             </p>
           </form>
           <p align="center">&nbsp;             </p>
     </div>
</div>
</body>
<?php
$rows = array();
$row = array();
mysql_connect("localhost","root","");
mysql_select_db("connect");
if(!empty($_REQUEST['btn']))
{
$q2="SELECT semester,branch,fatname,dob,doorno,streetname,area,city,pincode,pno  FROM  details WHERE sno='".$_REQUEST['sno']."'";
$q1="SELECT firstname,lastname,username FROM user WHERE sno='".$_REQUEST['sno']."'";
$q = "SELECT fafl,ncp,sdm,random,ai,total FROM marks WHERE sno='".$_REQUEST['sno']."'";


$res1=mysql_query($q1);
$n1=mysql_num_rows($res1);
while($rows = mysql_fetch_array($res1))
{
echo "First Name:";
echo $rows['firstname'];
echo "<br />";
echo "Last Name:";
echo $rows['lastname'];
echo "<br />";

echo "User Name:";
echo $rows['username'];
echo "<br />";
}
 
$res=mysql_query($q);
$n=mysql_num_rows($res);
while($rows = mysql_fetch_array($res))
{
echo "FAFL:";
echo $rows['fafl'];
echo "<br />";
echo "NCP:";
echo $rows['ncp'];
echo "<br />";
echo "SDM:";
echo $rows['sdm'];
echo "<br />";
echo "Random:";
echo $rows['random'];
echo "<br />";
echo "AI:";
echo $rows['ai'];
echo "<br />";
echo "Percentage is:";
echo $rows['total'];
echo "<br />";
}
}

?>
</html>

