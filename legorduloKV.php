<?php
$con = mysqli_connect("localhost","root","","futok");

// Check connection
if (mysqli_connect_errno())
  { 
  echo "Hiba az adatbázishoz való csatlakozáskor: " . mysqli_connect_error();
  }

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legördülő</title>
</head>
<body>
<?php
$query = "SELECT column_name from information_schema.columns where table_schema ='feladat2' and table_name ='futok';";

$minden = mysqli_query($query);
print "<form action='legördülő.php'  method='post'>
    <select name='select' size=”1”>";
    while($row =  mysqli_fetch_assoc(mysqli_result $minden):)
    {
      print "<option value='".$row['COLUMN_NAME']."'>".$row['COLUMN_NAME']."</option>"
    }
       
       
      
    </select>
   <br>
   <input type='submit' name='submit'  >				
 </form>";
?>


</body>
</html>