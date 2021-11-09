<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kepek";

$link = mysqli_connect("localhost", "root", "", "kepek");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM keretek";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>kod</th>";
                echo "<th>Név: </th>";
                echo "<th>Mennyiség: </th>";
                echo "<th>Egységár: </th>";
                echo "<th>Kedvezményes ár : </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
              echo"<form action='' method='GET'>";
                echo "<br><td><a href=torol.php?kepek=".$row['id'].">".$row['id']."</td></a>";
                echo "<td>" . $row['kod'] . "</td>";
                echo "<td>" . $row['nev'] . "</td>";
                echo "<td>" . $row['mennyiseg'] . "</td>";
                echo "<td>" . $row['egysegar'] . "</td>";
                echo "<td>" . $row['kedvezmenyes_ar'] . "</td>";
                echo"</form>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

$torlendo=$_GET['kepek'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
    $sql = "DELETE FROM keretek WHERE id=$torlendo";

    /*use exec() because no results are returned*/
    $conn->exec($sql);
    echo "<br>Sikeresen törölted a sor-t.";
    }
catch(PDOException $e)
    {
    echo $sql."".$e->getMessage();
    }

$conn = null;




?>