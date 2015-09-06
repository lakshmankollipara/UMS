<html>
<head>
<style type="text/css">
table
{
margin-left:100px;
}
td
{
width:150px;
height:50px;
text-align:center;
}
</style>
</head>
<body background="bbg.png">  
<center><h1>BUS DETAILS</h1></center>

<?php
mysql_connect("localhost","root","");
mysql_select_db("dbn") or die( "Unable to select database");
$f=$_REQUEST['fro'];
$t=$_REQUEST['gto'];
$d=$_REQUEST['day'];
$m=$_REQUEST['mon'];
$y=$_REQUEST['year'];
$query1="select * from bus where fr='$f' and tol='$t' and dat='$d' and mon='$m'";
$result=mysql_query($query1);
$num=mysql_num_rows($result);
if($m=="Jan")
$my=1;
else 
if($m=="Feb")
$my=2;
else
if($m=="Mar")
$my=3;
else 
if($m=="Apr")
$my=4;
else
if($m=="May")
$my=5;
else 
if($m=="Jun")
$my=6;
else
if($m=="Jul")
$my=7;
else 
if($m=="Aug")
$my=8;
else
if($m=="Sep")
$my=9;
else 
if($m=="Oct")
$my=10;
else
if($m=="Nov")
$my=11;
else 
if($m=="Dec")
$my=12;


$date1=date("d");
if(date("m")==$my)
{
$query11="delete  from bus where dat<'$date1' and mon='$m'";
$result1=mysql_query($query11);
}
if(((date("m")==$my)&&(date("d")>$d))||((date("m")>$my)))
{
echo "<br><br><br><br><br><hr><br><center><h2>Invalid date details (date already over)</h2><br><hr></center>";
}
else
if($num!=0)
{
?>
<table>
<tr>
<th><font face="Arial, Helvetica, sans-serif">From</font></th>
<th><font face="Arial, Helvetica, sans-serif">To</font></th>
<th><font face="Arial, Helvetica, sans-serif">Date</font></th>
<th><font face="Arial, Helvetica, sans-serif">Seats</font></th>
<th><font face="Arial, Helvetica, sans-serif">Bus type</font></th>
<th><font face="Arial, Helvetica, sans-serif">Fare</font></th>
<th><font face="Arial, Helvetica, sans-serif">BOOK</font></th>
</tr>
<?php
$i=0;
while ($i < $num) 
{
$f1=mysql_result($result,$i,"fr");
$f2=mysql_result($result,$i,"tol");
$f3=mysql_result($result,$i,"dat");
$f4=mysql_result($result,$i,"mon");
$foo=$f3 ."-". $f4;
$f5=mysql_result($result,$i,"seats");
$f6=mysql_result($result,$i,"busty");
$f7=mysql_result($result,$i,"fare");
/*echo "$f1";
echo "$f2";
echo "$f3";
echo "$f5";
echo "$f6";
echo "$f7";
*/?>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1;?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $foo; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="book.html">Book</a></font></td>
</tr>
<?php
$i++;
}
}
else
{
echo "<br><br><br><br><br><hr><br><center><h2>Bus not Available</h2><br><hr></center>";
}
?>
</table>
</body>
</html>