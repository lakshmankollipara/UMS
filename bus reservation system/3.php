<html>
<body background="bbg.png">
<?php
mysql_connect("localhost","root","");
mysql_select_db("dbn") or die( "Unable to select database");
$f=$_REQUEST['fro'];
$t=$_REQUEST['gto'];
$d=$_REQUEST['dat'];
$m=$_REQUEST['mon'];
$y=$_REQUEST['yr'];
$s=$_REQUEST['seats'];
$fl=$_REQUEST['bus'];
$r=$_REQUEST['proof'];
$ttt=$_REQUEST['acc'];
/*$avs="select * from bus where fr='$f' AND to='$t' AND dat='$d' AND mon='$m' AND seats>'$s' AND busty='$fl' ";
$aq=mysql_query($avs);
$nyt=mysql_num_rows($aq);and dat='$d' and mon='$m' and busty='$fl'"*/
$aq=mysql_query("select * from bus  where fr='$f' and tol='$t' and dat='$d' and mon='$m' and seats>='$s' and busty='$fl'");
$rrrr=@mysql_num_rows($aq);
$nyt=@mysql_fetch_array($aq);
$rrr=$nyt['seats'];
$ty="";
$by="";
if($fl=="ACVOLVO")
$by='VA';
else
if($fl=="SLVOLVO")
$by='VS';
else
if($fl=="NONAC")
$by='NAV';
if(($f=="Bangalore")&&($t=="Chennai"))
{
$ty='BC';
}
else
if(($f=="Bangalore")&&($t=="Hyderabad"))
{
$ty='BH';
}
else
if(($f=="Bangalore")&&($t=="Trivandrum"))
{
$ty='BT';
}
else
if(($f=="Bangalore")&&($t=="Mumbai"))
{
$ty='BM';
}
else
if(($t=="Bangalore")&&($f=="Chennai"))
{
$ty='CB';
}
else
if(($t=="Mumbai")&&($f=="Chennai"))
{
$ty='CM';
}
else
if(($f=="Trivandrum")&&($t=="Chennai"))
{
$ty='TC';
}
else
if(($f=="Mumbai")&&($t=="Chennai"))
{
$ty='MC';
}
else
if(($t=="Bangalore")&&($f=="Mumbai"))
{
$ty='MB';
}
$axx=$s*(123*$rrr);
$arr=$ty . $axx . $s . $d . $by . 'OBR';
if($rrrr>0)
{
$ae=$nyt['fare'];
$sd=$nyt['seats'];
echo "<center><br><br><br>TICKET DETAILS";
echo "<br><hr>";
echo "<br><br>";
echo "BUS: " .$fl. " ";
echo "<br><br>";
echo "FROM: " .$f. " ";
echo "<br><br>";
echo "TO: " .$t. " ";
echo "<br><br>";
echo "DATE OF JOURNEY: " .$d. "-" .$m. "-" .$y. " ";
echo "<br><br>";
echo "NO. OF SEATS: " .$s. " ";
echo "<br><br>";
echo "TICKET NO: " .$arr. "";
echo "<br><br>";
$doby=date("m");
$sd=$sd-$s;
$query="update bus set seats='$sd' where fr='$f' AND tol='$t' and dat='$d' and mon='$m'";
$result=mysql_query($query);
/*$q="select fare from bus where fr='$f' AND tol='$t' and busty='$fl'";
$n=mysql_query($q);
$x=mysql_fetch_array($n);*/
$fa=$s*$ae;

echo "FARE:" .$fa. "</center>";
$ups="insert into  passdetail values('$f','$t','$d','$m','$y','$s','$fl','$fa','$r','$arr','$ttt')";
$aq1=mysql_query($ups);
}
else
{
echo "<center><br><br><br><br><br><br><br><br><hr><br><h2>Buses not Available for given Information</h2><br><hr></center>";
}
?>
</body>
</html>