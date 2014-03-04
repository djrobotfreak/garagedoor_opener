<?php
echo "<link rel='stylesheet' type='text/css' href='stylegarage.css' />";
if(!empty($_GET['north']))  {
        echo exec('gpio mode 6 out');
        echo exec('gpio write 6 0');
        usleep(1000000);
        echo exec('gpio write 6 1');
?>
<form action="testexec.php" method="get" >
<input type="hidden" name="north" value="run">
<input type="submit" value="Door North">
</form>
 <form action="testexec.php" method="get">
  <input type="hidden" name="south" value="run">
  <input type="submit" value="Door South">
</form>
<?php
  }
else if (!empty($_GET['south'])) {
        echo exec('gpio mode 7 out');
        echo exec('gpio write 7 0');
        usleep(1000000);
        echo exec('gpio write 7 1');
?>
<form action="testexec.php" method="get">
  <input type="hidden" name="north" value="run">
  <input type="submit" value="Door North">
</form>
<form action="testexec.php" method="get">
  <input type="hidden" name="south" value="run">
  <input type="submit" value="Door South">
</form>
<?php
  }
  else{
  ?>
<form action="testexec.php" method="get">
  <input type="hidden" name="north" value="run">
  <input type="submit" id="submit" value="Door North">
</form>
<form action="testexec.php" method="get">
  <input type="hidden" name="south" value="run">
  <input type="submit" id="submit" value="Door South">
</form>
<?php
  }
?>
