<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post">
    <select name="mezok" value="mezők">
      <?php
      require("kapcs.inc.php");
      $query = "SELECT COLUMN_NAME
      FROM INFORMATION_SCHEMA.COLUMNS
      WHERE TABLE_SCHEMA = 'feladat_2021_11_02' AND TABLE_NAME = 'futok'";
      
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_assoc($result)) {
        $valasztott = $row["COLUMN_NAME"];
        echo "<option value=$valasztott>".$row["COLUMN_NAME"]."</option><br>";
      }
      ?>
    </select>
    
    <input type="submit" name="kuld">

  </form>
  <?php
    if (isset($_POST["mezok"])) {
      $valasztottmezo = $_POST["mezok"];
      $query = "SELECT $valasztottmezo FROM futok";
      print("<h2>".$valasztottmezo."</h2>");
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_assoc($result)) {
        echo $row["$valasztottmezo"]."<br>";
      }
    }
  ?>
</body>
</html>