<?php

?>

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
 
<form method="post">
<input type="submit" value="Listázás" name="list">

<input type="submit" value="Adatok hozzáadása" name="adat">

<input type="submit" value="Módosítás" name="mod">

<input type="submit" value="Törlés" name="tor">

</form>





<?php
if(isset($_POST['list']))
{
    header("Location:listaz.php");
    exit();
}
if(isset($_POST['adat']))
{
    header("Location:bovit.php");
    exit();
}
if(isset($_POST['mod']))
{
    header("Location:modosit.php");
    exit();
}
if(isset($_POST['tor']))
{

    header("Location:torles.php");
    exit();
}
?>  

</div>


</body>
</html>