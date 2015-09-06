<html>
<head>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["acno"].value
var y=document.forms["myForm"]["tno"].value
if ((x==null || x=="")||(y==null || y==""))
  {
  alert("Ticket no and Account no must be filled out");
  return false;
  }
}
</script>
</head>
<body background="bbg.png">
<hr>
<center>
<h1>CANCELLATION</h1>
</center>
<hr>
<br>
<form name="myForm" action="c.php"  onsubmit="return validateForm()" method="post">
<center>
TICKET NUMBER:
<input type="text" name="tno">
<br>
<br>
ACCOUNT NUMBER:
<input type="number" name="acno">
<br>
<br>
<input type="submit" name="cancel" value="Cancel">
</center>
</form>

</body>
</html>