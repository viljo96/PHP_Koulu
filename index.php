<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>Eka sivu</title>
</head>
<body>
<p> Tervetuloa! </p>
<form method="POST" action="/login.php">
  Käyttäjä : <input type="text" name="enimi"required><br>
  Salasana : <input type="password" name="salasana"required><br>
  <input type="submit" value="Kirjaudu">
</form>
<input type= "submit" onclick="window.location.href = '/rekisteroityminen.php';" value="Rekisteröidy">
</body>
</html>
