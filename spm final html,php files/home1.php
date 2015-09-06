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
.style8 {
	font-family: "Lucida Handwriting";
	color: #FF0000;
}
.style9 {font-family: Arial}
.style10 {color: #FFFFFF}
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
 <div class="style8"  id="header">
   <h1 align="center" class="style9 style10">University Management System 
    
 </h1>
</div>
	   </br>
	   </br>
   <div id="wrapper">
		
         <div id="inbox">
	       <p>&nbsp;</p>
	       <p>&nbsp;</p>
	       <table width="200" border="0" align="center">
             <tr>
               <td width="87">&nbsp;</td>
               <td width="210"><img src="spm/StudentPortalLogo_new.jpg" width="210" height="212" align="right" /></td>
               <td width="88">&nbsp;</td>
             </tr>
             <tr>
               <td colspan="3"><div align="center">
                 <h2> Welcome </h2>
               </div></td>
             </tr>
             <tr>
               <td colspan="3"><table width="393" border="0" align="center">
                 <tr>
                   <td width="157">
                     <h2><a href="details.php" title="" class="style9">view details </a></h2></td>
                   <td width="145"><h2><a href="entermarks.php" title="" class="style9">enter marks</a></h2></td>
                   <td width="77"><h2><a href="index1.php" title="" class="style9">logout</a></h2></td>
                 </tr>
               </table></td>
             </tr>
           </table>
	       <h2 align="center">&nbsp;</h2>
	       <p align="center">&nbsp;</p>
	       <h2></h2>
	       <p>&nbsp;</p>
     </div>
</div>
   
</body>
</html>
