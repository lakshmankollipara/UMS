<html>
<body background="bbg.png">
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("dbn");
$q="select * from userdetail where username='".$_REQUEST['username']."' and pemail='".$_REQUEST['email']."'";
$res=mysql_query($q);
$n=mysql_num_rows($res);
$row = mysql_fetch_row($res);
if($n==1)
{
$f1=mysql_result($res,0,"username");
$f2=mysql_result($res,0,"sec");
$f3=mysql_result($res,0,"pemail");
?>
<br>
<br>
<br>
<br>
<center>
<form name="fgt" action="5frgt.php" target="you"><br>USERNAME:<select name="uname"><option value="<?php echo "$f1"; ?>"><?php echo "$f1"; ?></option></select><br><br>QUESTION:<select name="ques"><option value="<?php echo "$f2"; ?>"><?php echo "$f2"; ?></option></select><br><br> EMAIL:<select name="email"><option  value="<?php echo "$f3"; ?>"><?php echo "$f3"; ?></option></select><br><br>ENTER ANSWER:<input type="text" name="ansa"><br><br><input type="submit" name="checks" value="check" ></form></center>
<?php
}
else
echo '<br><br><br><br><hr><br><center><h2> invalid username and password</h2></center><br><hr>';
?>
</body>
</html>