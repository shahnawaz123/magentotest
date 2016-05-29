<?php
session_start();
?>

<html>
<form name="form1" method="post">
<table>
<tr><td>Username </td><td><input type="text" name="text1"></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd"></td></tr>
<tr><td><input type="submit" value="SignIn" name="submit1"> </td></tr>
</table>
</form>
</html>

<?php
if(@$_POST['submit1'])
{
$u = $_POST['text1'];
$p = $_POST['pwd'];
if($u =="sanjeev" && $p=="san123")
{
$_SESSION['luser'] = $u;
$_SESSION['start'] = time(); // taking now logged in time
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60) ; // ending a session in 30     minutes from the starting time
header('Location: HomePage.php');
}
else
{
echo "Please enter Username or Passwod again !";
}

}
?>