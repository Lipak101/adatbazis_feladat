<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<<video autoplay muted loop id="myVideo">
  <source src="videoplayback.mp4" type="video/mp4">
</video>
<div class="content">
<?php

require("kapcs.inc.php");
$result = mysqli_query($con,"SELECT * FROM kepek");
echo "<table class = 'szoveg'>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "               " ."</td>";
echo "<td>" . $row['kod'] . "               ". "</td>";
echo "<td>" . $row['nev'] . "               " ."</td>";
echo "<td>" . $row['mennyiseg'] ."               " . "</td>";
echo "<td>" . $row['egysegar'] . "               ". "</td>";
echo "<td>" . $row['kedv_ar'] ."               " . "</td>";
echo "</tr>";
print ("<br>");
}
echo "</table>";

echo("<div class='form-center'>");

mysqli_close($con);

if (!isset($_POST['gomb'])) {
    print("<form action = 'torles.php' method = 'post'>");
    print("id : <input type = 'text' name = 'torles'>");
    print("<input type = 'submit' name = 'gomb'>");
    print("</form>");
}

else{
    require("kapcs.inc.php");
    $a = $_POST['torles'];
    $query = "DELETE FROM kepek WHERE id = '$a' ";
    mysqli_query($con,$query);
}




print("<form method='post' class='gomb'>");
print("<input type='submit' value='Menü' name='menu'>");
print("</form>");

echo("</div>");
if(isset($_POST['menu']))
{

    header("Location:index.php");
    exit();
}
?>
</div>

</body>
</html>

