<?php
session_start();
//Alustetaan muuttujat
$servername = "localhost";
$username = "root";
$password = "";
$dbname="liikuntakanta";
$ika=$_POST['ika'];
$paino=$_POST['paino'];
$kayttaja=$_SESSION['enimi'];
//Luodaan tietokantayhteys
$conn = new mysqli($servername, $username, $password,$dbname);
//Luodaan ensimmäinen tietokantakysely
$sql ="UPDATE kayttaja SET Paino='$paino', ika='$ika' WHERE kayttajanimi='$kayttaja'";
$result = $conn->query($sql);
      header("refresh:1;url=secondpage.php");
?>
