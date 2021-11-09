<?php
?>
<form action="index.php" method="post">
<input type="submit" name="menu1" value="1 es menü">
<input type="submit" name="menu2" value="2 es menü">
<input type="submit" name="menu3" value="3 es menü">
<input type="submit" name="menu4" value="4 es menü">
<br>
<br>
<?php
if(isset($_POST['menu1']))
{
    require 'bovit.php';
}
if(isset($_POST['menu2']))
{
    require 'valami.php';
}
?>
