<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<<video autoplay muted loop id="myVideo">
  <source src="videoplayback.mp4" type="video/mp4">
</video>

<div class="content">
<?php

if(!isset($_POST['gomb']))
{

    print("<form action='bovit.php' method='POST' >");
    print("Id: <input type='text' name='id2'>");
    print("Kód: <input type='text' name='kod2'>");
    print("Név: <input type='text' name='nev2'>");
    print("Mennyisés: <input type='text' name='mennyiseg2'>");
    print("Egységár:  <input type='text' name='egysegar2'>");
    print("Kedvezményes ár:  <input type='text' name='kedv2'>");
    print("<br> <input type='submit' name='gomb'>");
    print("</form>");   

}
else{
    require("kapcs.inc.php");
    $id=$_POST['id2'];
    $k=$_POST['kod2'];
    $n=$_POST['nev2'];
    $menny=$_POST['mennyiseg2'];
    $egy=$_POST['egysegar2'];
    $ke=$_POST['kedv2'];
    $query = "insert into kepek (id,kod,nev,mennyiseg,egysegar,kedv_ar) values ('$id','$k','$n','$menny','$egy','$ke')";
    mysqli_query($con,$query);    
}


?>

<form method="post" class="gomb">
<input type="submit" value="Menü" name="menu">
</form>
<?php

if(isset($_POST['menu']))
{
    header("Location:index.php");
    exit();
}
?>
</div>




</body>
</html>