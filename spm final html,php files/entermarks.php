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
     <div id="navigation">
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <ul>
         <li>
           <div align="right">
             <table width="486" border="0" align="center">
             <tr>
               <td width="154"><h2><a href="details.php" title="">View Details</a></h2></td>
               <td width="154"><div id="navigation">
                 <h2><a href="entermarks.php">enter marks</a></h2>
               </div></td>
               <td width="164"><div align="center">
                 <h2><a href="index.php" title="">Logout</a> </h2>
               </div></td>
             </tr>
             </table>
           </div>
         </li>
					
					
                </ul>	 
	 </div><br /><br />
<form name="form1" method="post" action="">
  <p>Reg No
    <input type="text" name="sno">
  </p>
  <p>FAFL      
    <input type="text" name="fafl">
  </p>
  <p>NCP      
    <input type="text" name="ncp">
  </p>
  <p>SDM
    <input type="text" name="sdm">
  </p>
  <p>Random    
    <input type="text" name="random">
</p>
  <p>
    AI
    <input type="text" name="ai"> 
  </p>
  <p>
    <input type="submit" name="button">  
  </p>
</form>
<p>&nbsp;</p>
</body>
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("connect");
if(!empty($_REQUEST['button']))
{
$fafl=$_REQUEST['fafl'];
$ncp=$_REQUEST['ncp'];
$sdm=$_REQUEST['ncp'];
$random=$_REQUEST['random'];
$ai=$_REQUEST['ai'];
$total = (($_REQUEST['fafl']+$_REQUEST['ncp']+$_REQUEST['ncp']+$_REQUEST['random']+$_REQUEST['ai'])*0.2);
echo $total;
$q1="INSERT INTO marks values ('".$_REQUEST['sno']."','".$_REQUEST['fafl']."','".$_REQUEST['ncp']."','".$_REQUEST['sdm']."','".$_REQUEST['random']."','".$_REQUEST['ai']."','".$total."')";


mysql_query($q1) or die(mysql_error());
	

header("Location:entermarks.php?ok");
}
?>
</html>