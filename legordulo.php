<?php

require("kapcs.inc.php");

$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA ='kepek' AND 'futok'='futok'";
$result = mysqli_query($con,$sql);

echo "<select name=COLUMN_NAME>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='".$row['COLUMN_NAME']."'>".$row['COLUMN_NAME']. "</option>";
}
echo "</select>";

?>
14:57
BulaBlack
Bárdfalvi Roland
🔥
BulaBlack
Bárdfalvi Roland
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post"action="<?php echo $PHP_SELF; ?>">  
<?php

require("kapcs.inc.php");

$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA ='kepek' AND TABLE_NAME='futok'";
$result = mysqli_query($con,$sql);

if (isset ($select)&&$select!=""){  
    $select=$_POST ['COLUMN_NAME'];
}

echo "<select name=COLUMN_NAME>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='".$row['COLUMN_NAME']."'>".$row['COLUMN_NAME']. "</option>";
}
echo "</select>";

echo "<input type='submit' name='' value='OK'></input>";

?>
<!-- Bárdfalvi Roland -->
</form>
</body>
</html>