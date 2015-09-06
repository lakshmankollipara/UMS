<html>
<body background="bbg.png">
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("dbn");
$q="select * from userdetail where username='".$_REQUEST['uname']."' and pemail='".$_REQUEST['email']."' and sec='".$_REQUEST['ques']."' and ans='".$_REQUEST['ansa']."'";
$res=mysql_query($q);
$n=mysql_num_rows($res);
$row = mysql_fetch_row($res);
if($n==1)
{
$f1=mysql_result($res,0,"username");
$f2=mysql_result($res,0,"sec");
$f3=mysql_result($res,0,"pemail");
$f4=mysql_result($res,0,"ans");
$f5=mysql_result($res,0,"password");
echo "<br><br><br><br><br><br><center> YOUR PASSWORD IS  :   $f5  </center>";
}
else
echo '<br><br><br><br><br><br><center><hr><br><h2>Invalid Answer</h2><br><hr></center>';
?>
</body>
</html>