<HTML>
<HEAD>
<head>
<style type="text/css">
a.one:link {color:#ff0000;}
a.one:visited {color:#0000ff;}
a.one:hover {font-size:110%;}
</style>
<TITLE>
LOGIN
</TITLE>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["username"].value
var y=document.forms["myForm"]["password"].value
if ((x==null || x=="")||(y==null || y==""))
  {
  alert("User name and password must be filled out");
  return false;
  }
}
</script>
</HEAD>
<BODY background="bbg.png">
<form name="myForm" action="log123.php" onsubmit="return validateForm()" method="post" target="_parent" >
<marquee ><font face="comic sans MS"color="black"><h4>OBR WELCOMES YOU</h4></font></marquee>
<fieldset >
<legend align="center">
<font color="black">AUTHENTICATION</font>
</legend>
<p align="center">
<font color="black">
USERNAME :<input  type="text"
	name="username"
	value=""
	size="25"
	maxlength="50">
<br>
<br>
PASSWORD :<input       type="password"
	name="password"
	value=""
	size="25"
	maxlength="25">
<br><br>	
<input       type="submit"
	name="submit"
	value="signin">
<input       type="reset"
	name="reset"
	value="reset"><br>
</p>

<br><a class="one" href="4frgt.html" ><h2><font color="black">Forgot Password??</font></h2></a>
</font>
</fieldset>
</form>
</BODY>
</HTML>