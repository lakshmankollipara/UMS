<html>
<head>
<script type="text/javascript">
function fun()
{
alert("invalid username and password");
return false;
}
</script>
</head>
<body background="bbg.png">
<?php
mysql_connect("localhost","root","") or die("could not connect to data base");
mysql_select_db("dbn");
if(!empty($_REQUEST['submit']))
{
$q="select * from userinfo where username='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'";
$res=mysql_query($q);
$n=mysql_num_rows($res);
$row = mysql_fetch_row($res);
if($n!=0)
{
$_SESSION['name']=$_REQUEST['username'];
$_SESSION['id']= $row['0'];
header("Location:onclicksignin.html");
}
else
{
echo  "<center><br><br><br><br><br><br><h2>You Have Entered Invalid Username and Password</h2></center>" ;
}
}
?>
</body>
</html>