<?php 

include("index.php");

if(!isset($_POST['gomb'])){
    print("<form action= ''bovit.php' method='post'><br>");
    print("Kód: <input type='text' name='kod2'><br>");
    print("Név: <input type='text' name='nev2'><br>");
    print("Mennyiség: <input type='text' name='mennyiseg2'><br>");
    print("Egységár: <input type='text' name='egysegar2'><br>");
    print("Kedvezményes ár: <input type='text' name='kedv2'><br>");
    print("<input type='submit' name='gomb'><br>");
    print("</form>");

}
else{

    require("kapcs.inc.php");

    $n = $_POST['nev2'];
    $k = $_POST['kod2'];
    $m = $_POST['mennyiseg2'];
    $egy = $_POST['egysegar2'];
    $kedv_ar = $_POST['kedv2'];

    $query = "insert into kepek (kod,nev,mennyiseg,egysegar,kedvar) values ('$k','$n','$m','$egy','$kedv_ar')";
    mysqli_query($con,$query) or die ('Hiba az adatbevitelnél!');
}

?>