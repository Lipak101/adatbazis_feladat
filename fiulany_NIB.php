<?php
require("kapcs.inc.php");
$result1 = mysqli_query($con,"SELECT count(*) from Futok WHERE ffi == 1");
$result2 = mysqli_query($con,"SELECT count(*) from Futok WHERE ffi == 0");

echo("fiu:")
echo($result1);
echo("no:")
echo($result2);
?>