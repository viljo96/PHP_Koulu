<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>Rekisteröityminen</title>
 <style>
   body{
     text-align:center;
  </style>
</head>
<body background="urheilukuva.jpg">
<p> Tervetuloa rekisteröitymään! </p>
<form method="POST" action="/registeration_page.php">
  Käyttäjä : <input type="text" name="kayttajanimi"required><br>
  Salasana : <input type="password" name="salasana"required><br>
  Nimi : <input type="text" name="enimi"required><br>
  Ikä : <input type="text" name="ika"required><br>
  Paino : <input type="text" name="paino"required><br>
  <input type= "submit" value="Rekisteröidy">
</form>


</body>
</html>
