<!DOCTYPE html>
<html>
<head>
  <style>
    body{
      text-align:center;
    }
  </style>
<meta charset ="UTF-8">
<title>Eka sivu</title>
</head>
<body background="urheilukuva.jpg">
<p> Tervetuloa! </p>
<form method="POST" action="/login.php">
  Käyttäjä : <input type="text" name="enimi"required><br>
  Salasana : <input type="password" name="salasana"required><br>
  <input type="submit" class="nappi1" value="Kirjaudu">
</form>
<input type= "submit" class="nappi1" onclick="window.location.href = '/rekisteroityminen.php';" value="Rekisteröidy">
</body>
</html>
