<?php

error_reporting(1);

$expire=time()+60*60*24*30;

if(isset($_POST['sub']))
{
setcookie("user",$_POST['n'],time()+60);
setcookie("age",$_POST['a'], $expire);
setcookie("profile",$_POST['p'],$expire);
}
?>
<form method="post">
	Enter your user name<input type="text" name="n"/><hr/>
	Enter your age<input type="text" name="a"/><hr/>
	Enter your profile<input type="text" name="p"/><hr/>
	<input type="submit" name="sub" value="set value in cookie"/><hr/>
</form>