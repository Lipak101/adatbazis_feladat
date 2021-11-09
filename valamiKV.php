<?php
if(!isset($_POST['send'])){
        print("<form action='torol.php' method='post'>");
        print("<input type='submit' name='send' value='Küld'><br>");
        print("</form>");
    }
    else
    {
        $k = $_POST['kod2'];
        require("kapcs.inc.php");
        
        $query = "select * from kepek" ;
        print(mysqli_query($con,$query) or die('Hiba az adatbevitelbe!'));
    }
    ?>