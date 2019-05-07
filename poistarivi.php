<?php
  $napinID=$_POST['id'];
  $servername = "127.0.0.1:50300";
  $username = "azure";
  $password = "6#vWHD_$";
  $dbname="liikuntakanta";
  // Luodaan tietokantayhteys
  $conn = new mysqli($servername, $username, $password,$dbname);

  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql ="DELETE FROM liikunta WHERE RiviId =$napinID ";
  $result = $conn->query($sql);
      header("refresh:1;url=liikuntasuoritukset.php");
?>
