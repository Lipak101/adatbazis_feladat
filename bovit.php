<?php
if(!isset($_POST['gomb'])) {
    print("<form action ='bovit.php' method='post'>");
    print("<input type='text' name='kod2' placeholder='Kód'><br>");
    print("<input type='text' name='nev2' placeholder='Név'><br>");
    print("<input type='text' name='mennyiseg2' placeholder='Mennyiség'><br>");
    print("<input type='text' name='egysegar2' placeholder='Egységár'><br>");
    print("<input type='text' name='kedv2' placeholder='Kedvezményes'><br>");
    print("<input type='submit' name='gomb'>");
    print("</form>");
}
else
{
    require("kapcs.inc.php");
    
    $k=$_POST['kod2'];
    $n=$_POST['nev2'];
    $m=$_POST['mennyiseg2'];
    $egy=$_POST['egysegar2'];
    $kedv=$_POST['kedv2'];
    
    $query = "INSERT INTO kepek (kod, nev, mennyiseg, egysegar, kedv_ar) VALUES ('$k', '$n', '$m', '$egy', '$kedv')";
    //mysqli_query($con, $query);
    mysqli_query($con, $query) or die ('Hiba');
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bővítés</title>
</head>
<body>
    
</body>
</html>