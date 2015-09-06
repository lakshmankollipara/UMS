<?php
session_start();
if(empty($_SESSION['name']))
{
	header("Location:conn.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>new look</title>
<link rel="stylesheet" type="text/css" href="1.css" />
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
.style3 {font-size: 16px}
.style7 {font-size: 36px}
-->
</style>
</head>

<body>
<?php
	include("db.php");
	$q = "SELECT a.*,b.* FROM user as a,image as b WHERE a.sno=b.sno and a.sno='".$_SESSION['id']."'";
	$res = mysql_query($q);
	$rec=mysql_fetch_array($res);
	?>
 <div class="style2" id="header">
   <div align="center"><span class="style7">University Management System</span> 
    
 </div>
</div>
	   
   <div id="wrapper">
		
     <div id="navigation">
       <div align="right"></div>
     </div>
		 <div id="leftcolumn">
		 
	<div class="leftnav">
	
	<p><br />
	<table width="572" border="0" align="center">
      <tr>
        <td width="89"><div align="center"></div>
          <div align="center">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            </div>          </td>
        <td width="371"><img src="spm/college_students_smaller.jpg" width="313" height="198" align="right" /></td>
        <td width="98">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><table width="200" border="0" align="center">
          <tr>
            <td><h3>Welcome </h3>
            </td>
          </tr>
          <tr>
            <td><?php 
	echo $rec['firstname']." </br>  ".$rec['lastname']." </br>   ".$rec['sex'];
	echo "<br>".$rec['state']." , ".$rec['country'];?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="3"><table width="551" height="52" border="0" align="center">
          <tr>
            <td width="132"><h2><a href="themes.php" title="">view details</a></h2></td>
            <td width="164"><h2><a href="update.php">update details</a></h2>
              </td>
            <td width="137"><h2><a href="report.php" title="">view report</a></h2></td>
            <td width="100"><h2><a href="index.php" title="">logout</a></h2></td>
          </tr>
        </table></td>
      </tr>
    </table>
	<p>
	<p>
	<p>            
	<p><br />
	<p>	      
    <h1 align="center" class="style3" ></h1>
		   </div>
		 </div>
	 <div id="content">
	   <h3><br />
         <br />
         <br />
	       </h3>
	   <p>&nbsp;</p>
	   <h3>&nbsp;</h3>
	   <h3><br />
         <br />
         <br />
       </h3>
	   <center>
	</br>
	   <p>&nbsp;</p>
	   <p>&nbsp;</p>
	   <p>&nbsp;</p>
	   </center>
<center>
  <h1>&nbsp; </h1>
</center>
     </div>
	<div id="inbox"></div>
		 		
   </div>
   
</body>
</html>
s