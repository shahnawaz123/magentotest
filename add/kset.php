<html>
<body>
	
	<?php
	$exp=time()+60*60;
	if(isset($_POST['sub']))
	{
	setcookie("user",$_POST['n'],time()+60);
	setcookie("class",$_POST['c'],$exp);
	header('Location:kget.php');
	}
	?>
	<form method="POST">
		Enter Name<input type="txt" name='n'/>
		Enter Class<input type="txt" name='c'/>
		<input type="submit" name="sub"/>
	</form>
</body>
</html>