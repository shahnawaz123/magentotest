<?php
@$id=$_POST['id'];
@$pass=$_POST['pass'];
if(isset($_POST['signin']))
{
	if($id=="sanjeev" && $pass="sanjeev123")
	{
		if($_POST['ch']==true)
		{
		setcookie("cid",$id,time()+60*60);
		setcookie("cpass",$pass,time()+60*60);
		header('location:http://www.google.com');
		}
		header('location:http://www.google.com');
	}
	else
	{
	echo "invalid id or pass";
	}
}
?>
<form method="post">
<body>
<table border="1" align="center">
<tr>
	<td>Enter your id</td>
	<td><input type="text" name="id" value="<?php echo @$_COOKIE['cid'];?>"/></td>
</tr>
<tr>
	<td>Enter your password</td>
	<td><input type="password" name="pass" value="<?php echo @$_COOKIE['cpass'];?>"/></td>
</tr>
<tr>
	<td>stay signed in</td>
	<td><input type="checkbox" name="ch"/></td>
</tr>
<tr>
	<td colspan="2"><input type="submit" name="signin" value="SignIn"/></td>
</tr>
</table>	
	
</body>
</form>