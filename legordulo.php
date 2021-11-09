<?php
//require("kapcs.inc.php");

$con = mysqli_connect("localhost","root","","futok");
$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'futok' AND TABLE_NAME = 'futok';";
$query2 = "SELECT valasztott FROM 'futok';";
$result = mysqli_query($con, $query);

print "<form action='#' method='get'>";
print "<select name=valasztott>";

while ($row = mysqli_fetch_assoc($result)){
    print "<option value='". $row['COLUMN_NAME']. "'>". $row['COLUMN_NAME']. "</option>";
}

print "</select>&nbsp;";
print "<input type='submit' value='ok' name='submit'>";
print "</form>";

while ($row = mysqli_fetch_assic($query2)){
    print $query2;
}


if (mysqli_connect_errno())
  {
  echo "Hiba az adatbázishoz való csatlakozáskor: " . mysqli_connect_error();
  }

//     print "<label for='menu'>Válassz menüpontot:</label>
//            <select id='menu'>";
//            while($query){
//             print "<option value='elso'>$query</option>"
//            }
//            "</select>"
?>
