<?php

include("index.php");

require("kapcs.inc.php");

if(!isset($_GET['adat'])){

$eredm = mysqli_query($con,"SELECT * FROM kepek") or die ("Nem sikerült a lekérdezés!");


while($rekord = mysqli_fetch_object($eredm)){
    print("<form action='' method='GET'>");
    print("<br><a href=listaz.php?adat=".$rekord->id.">".$rekord->id."</a>");
    print("<br>".$rekord->kod);
    print("<br>".$rekord->nev);
    print("<br>".$rekord->mennyiseg);
    print("<br>".$rekord->egysegar);
    print("<br>".$rekord->kedvar);
    print("</form>");
}
}
else{
    $torol = $_GET['adat'];
    $query = ("DELETE FROM kepek WHERE id=$torol");

    mysqli_query($con,$query) or die("Hiba");
}

?>