<?php
session_start();

if(!isset($_SESSION['luser']))
{
    echo "Please Login again";
    echo "<a href='login.php'>Click Here to Login</a>";

}
else
{

    $now = time(); // checking the time now when home page starts

    if($now > $_SESSION['expire'])
    {
        session_destroy();
        echo "Your session has expire ! <a href='login.php'>Login Here</a>";
    }
    else
    { //starting this else one [else1]

?>


<!-- From here all HTML Coding can be done -->


<html>
Welcome <?php echo $_SESSION['luser']; 
        echo "<a href='logout.php'>LogOut</a>";
        ?>
</html>

<?php
 }
}
?>