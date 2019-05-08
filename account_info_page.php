<?php
session_start();
//Alustetaan muuttujat
$servername = "127.0.0.1:50300";
$username = "azure";
$password = "6#vWHD_$";
$dbname="localdb";
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
