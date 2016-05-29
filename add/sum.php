<form method="GET">
    Enter first value <input type="txt" name ="n1"/><br/>
    Enter Second value <input type ="txt" name ="n2"/><br/>
                       <input type ="submit" value= "add two no."/>


</form>

  <?php
$a =$_GET['n1'];
$b=$_GET['n2'];
echo $a+$b;
  ?>