<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<style>
body{
  text-align:center;
}
</style>
</head>
<?php
//Tervehditään käyttäjää
session_start();
echo"Päivitä käyttäjätietojasi  ".$_SESSION['enimi']."!";
?>
<body background="urheilukuva.jpg">
<p> Muuta painoasi tai ikääsi </p>
<form method="POST" action="/account_info_page.php">
  Ikä : <input type="text" name="ika"required><br>
  Paino : <input type="text" name="paino"required><br>
  <input type= "submit" value="Päivitä">
</form>


</body>
</html>
