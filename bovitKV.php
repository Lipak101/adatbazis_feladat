<?php
    

    if(!isset($_POST['send'])){
        print("<form action='bovit.php' method='post'>");
        print("Kód: <input type='text' name='kod2'><br>");
        print("Név: <input type='text' name='nev2'><br>");
        print("Mennyiség: <input type='text' name='menny2'><br>");
        print("Egységár:: <input type='text' name='egyseg2'><br>");
        print("Kedvezményes ár: <input type='text' name='kedvar2'><br>");
        print("<input type='submit' name='send' value='Küld'><br>");
        print("</form>");

    }
    else{
        require("kapcs.inc.php");
        $n = $_POST['nev2'];
        $k = $_POST['kod2'];
        $m = $_POST['menny2'];
        $egy = $_POST['egyseg2'];
        $kedv = $_POST['kedvar2'];
        $query = "insert into kepek (kod,nev,mennyiseg, egysegar, kedv_ar) values ('$k','$n','$m','$egy','$kedv')";
        mysqli_query($con,$query) or die('Hiba az adatbevitelbe!');
    }
?>