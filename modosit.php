<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kepek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
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
                echo "<br><td>".$row['id']."</td>";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        Melyik kereten szeretnél módosítani add meg a sorszámát:
        <input type="text" id="id">
        <br>
        Mit szeretnél módosítani(kod,nev,mennyiseg,egysegar,kedvezmenyes_ar)?:
        <input type="text" id="atributum"><br>
        Mire szeretnéd módosítani?:
        <input type="text" id="ertek"><br>
        <input type="submit" id="update" value="Módosít">
    </form>
</body>
</html>
<?php
if(isset($_POST['update'])){
    $sql = "UPDATE keretek SET ".isset($_POST['atributum'])." ='".isset($_POST['ertek'])."' WHERE id=".isset($_POST['id']);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}




?>