<?php
$con = mysqli_connect("localhost","root","","feladat_2021_11_02");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Hiba az adatbázishoz való csatlakozáskor: " . mysqli_connect_error();
  }

?>

