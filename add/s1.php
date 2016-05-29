
<html>
 <body>
	<?php
	session_start();
	$n=$_POST['nn'];
	$p=$_POST['p'];
	if(isset($_POST['sub']))
	{
	$_SESSION['usr']=$n;
	$_SESSION['prof']=$p;
	//$_SESSION['start']=time();
	//$_SESSION['expire']=$_SESSION['start']+(30*60);
	header('Location:s2.php');
	}
	?>
	<form method="POst"/>
	Enter name<input type="txt" name='nn'/>
	Enter Profile<input type="txt" name='p'/>
	<input type="submit" name='sub' value="Sign_In"/>
	</form>
 </body>
</html>