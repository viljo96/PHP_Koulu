<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>Toka sivu</title>
</head>
<body>
  <?php
  //Tervehditään käyttäjää
  session_start();
echo"Tervetuloa  ".$_SESSION['enimi']."!";
?>

<a href="liikuntasuoritukset.php">Aikaisemmat suorituksesi</a>
<p>Syötä harrastamasi laji:</p>
<form method="POST" action="taulusivu.php">
  <select name="liikuntamuoto">
  <option value="Tyhjä">valitse laji...</option>
  <option value="juoksu">Juoksu</option>
  <option value="sali">Kuntosali</option>
  <option value="pallopelit">Pallopelit</option>
  <option value="uinti">Uinti</option>
  </select>
Tunnit:  <input type="text" name="Tunnit" required</br>
Päiväys: <input type="date" name="pvm" required</br>
  <input type="submit" value="kirjaa">

</form>
</div>
  <a href="index.php">Kirjaudu ulos</a>
</body>
</html>
