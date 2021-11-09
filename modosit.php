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
    else
    $modosit = 0;
    $query = ("UPDATE TABLE FROM kepek WHERE id=$modosit");
    if($modosit = $_GET['adat'] != 0){
        print("<form action= ''modosit.php' method='post'><br>");
        print("Kód: <input type='text' name='kod2'><br>");
        print("Név: <input type='text' name='nev2'><br>");
        print("Mennyiség: <input type='text' name='mennyiseg2'><br>");
        print("Egységár: <input type='text' name='egysegar2'><br>");
        print("Kedvezményes ár: <input type='text' name='kedv2'><br>");
        print("<input type='submit' name='gomb'><br>");
        print("</form>");
    }
?>