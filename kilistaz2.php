<?php
    require("kapcs.inc.php");

    $sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'kepek' AND TABLE_NAME = 'futok'";
    $result=mysqli_query($con,$sql);
    echo "<form action='#' method='get'>";
    echo "<select name=COLUMN_NAME>";
    while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['COLUMN_NAME'] . "'>" . $row['COLUMN_NAME'] . "</option>";
    }
    echo "</select>&nbsp;";
    
    echo "<input type='button' value='OK' name='submit'>";
    echo "</form>";

    if(isset($_GET['submit']))
    {
        $fejlec=$row['COLUMN_NAME'];
        $sql ="SELECT ".$fejlec." FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'kepek' AND TABLE_NAME = 'futok'";
        $result=mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row[$fejlec]."<br>";
        }
    }
?>
