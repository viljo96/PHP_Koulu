<?php
  $napinID=$_POST['id'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="liikuntakanta";
  // Luodaan tietokantayhteys
  $conn = new mysqli($servername, $username, $password,$dbname);

  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql ="DELETE FROM liikunta WHERE RiviId =$napinID ";
  $result = $conn->query($sql);
      header("refresh:1;url=liikuntasuoritukset.php");
?>
