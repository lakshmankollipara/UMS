<html>
<body background="bbg.png">
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("dbn");
$fl=$_REQUEST['tno'];
$r=$_REQUEST['acno']; 
$w="select * from passdetail where ticno='$fl' and acno='$r'";
$res1=mysql_query($w);
$n3=mysql_num_rows($res1);
$row=mysql_fetch_array($res1);
if($n3!=0)
{
$s1=$row['seats'];
$s2=$row['fr'];
$s3=$row['tol'];
$s4=$row['dat'];
$s5=$row['mon'];
$s6=$row['yr'];
$s7=$row['busname'];
$s8=$row['fare'];
$s9=$row['ticno'];
$s10=$row['acno'];
$w1="select * from bus  where fr='$s2' and tol='$s3' and dat='$s4' and mon='$s5'";
$res11=mysql_query($w1);
$n1=@mysql_num_rows($res11);
$row1= @mysql_fetch_array($res11);
if($n1!=0)
{
$s11=$row1['seats'];
$s11=$s11+$s1;
$s8=$s8-$s8*.2;
$q="delete from passdetail where ticno='$fl' and acno='$r'";
$res=mysql_query($q);
$w2="update bus set seats='$s11' where fr='$s2' and tol='$s3' and dat='$s4' and mon='$s5' and busty='$s7'";
$res2=@mysql_query($w2);
if($res2)
{
echo "<br><br<br><br><br><center><h2>Cancellation done";
echo "80%(Rs $s8) refunded to account no ";
echo "$s10</h2></center>"; 
}
else 
{
echo "<br><br<br><br><BR><br><center> ";
echo "INVALID TICKET NUMBER</center>";
}
}
}
else 
{
echo "<br><br<br><br><BR><br><center> ";
echo "INVALID TICKET NUMBER<br><br>Sorry try again......</center>";
}
?>
</body>
</html> 