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
		 	 <div id="content">
		 	   <form name="form1" id="form1" method="post" action="#">
		 	     <p>Enter Student No
		 	       <input type="text" name="sno" />
	 	      
		 	       <input type="submit" name="btn"  />
</p>
		 	     <p>                   <img src="spm/soft_icons-165691-2.jpeg" width="85" height="101" align="right" /> </p>
		 	     <p>&nbsp;</p>
	 	       </form>
		 	   <p>&nbsp;</p>
		 	   <p>&nbsp;</p>
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
$q2="SELECT semester,branch,fatname FROM  details WHERE sno='".$_REQUEST['sno']."'";
$q1="SELECT firstname,lastname,username FROM user WHERE sno='".$_REQUEST['sno']."'";
$q = "SELECT fafl,ncp,sdm,random,ai,total FROM marks WHERE sno='".$_REQUEST['sno']."'";

$res2=mysql_query($q2);
$n2=mysql_num_rows($res2);
while($rows = mysql_fetch_array($res2))
{
echo "Semester:";
echo $rows['semester'];
echo "<br />";
echo "Branch:";
echo $rows['branch'];
echo "<br />";
echo "Father Name:";
echo $rows['fatname'];
echo "<br />";
}

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

