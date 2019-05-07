<?php
session_start();
//Alustetaan muuttujat
$servername = "127.0.0.1:50300";
$username = "azure";
$password = "6#vWHD_$";
$dbname="localdb";
$liikuntamuoto=$_POST['liikuntamuoto'];
$_SESSION['liikunta']=$liikuntamuoto;
$tunnit=$_POST['Tunnit'];
$_SESSION['Tunnit']=$tunnit;
$pvm1 = strtotime($_POST["pvm"]);
$pvm1 = date('Y/m/d', $pvm1); //now you can save in DB
$kayttajaid=$_SESSION['kayttajaId'];
$paino=$_SESSION['paino'];
$ika=$_SESSION['ika'];
// Luodaan tietokantayhteys
$conn = new mysqli($servername, $username, $password, $dbname);

// Tarkistetaan tietokantayhteys
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Suoritetaan tietokantakysely
$sql = "SELECT Kulutus FROM liikuntamuoto WHERE Nimi='$liikuntamuoto'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$kokonaiskulutus=$tunnit*$row['Kulutus'];

if($paino<70){
  $loppukulutus=$kokonaiskulutus*0.94;
  if($ika<20){
    $loppukulutus=$loppukulutus*1.03;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=20&&$ika<30){
    $loppukulutus=$loppukulutus;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=30&&$ika<40){
    $loppukulutus=$loppukulutus*0.97;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=40&&$ika<50){
    $loppukulutus=$loppukulutus*0.94;
        $_SESSION['loppu']=$loppukulutus;
  }
  else{
    $loppukulutus=$loppukulutus*0.91;
        $_SESSION['loppu']=$loppukulutus;
  }
}
else if($paino<=70&&$paino<80){
  $loppukulutus=$kokonaiskulutus;
  if($ika<20){
    $loppukulutus=$loppukulutus*1.03;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=20&&$ika<30){
    $loppukulutus=$loppukulutus;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=30&&$ika<40){
    $loppukulutus=$loppukulutus*0.97;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=40&&$ika<50){
    $loppukulutus=$loppukulutus*0.94;
        $_SESSION['loppu']=$loppukulutus;
  }
  else{
    $loppukulutus=$loppukulutus*0.91;
        $_SESSION['loppu']=$loppukulutus;
  }
}

else  if($paino>=80&&$paino<90){
  $loppukulutus=$kokonaiskulutus*1.06;
  if($ika<20){
    $loppukulutus=$loppukulutus*1.03;
    $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=20&&$ika<30){
    $loppukulutus=$loppukulutus;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=30&&$ika<40){
    $loppukulutus=$loppukulutus*0.97;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=40&&$ika<50){
    $loppukulutus=$loppukulutus*0.94;
        $_SESSION['loppu']=$loppukulutus;
  }
  else{
    $loppukulutus=$loppukulutus*0.91;
        $_SESSION['loppu']=$loppukulutus;
  }
}
else if($paino>=90&&$paino<100){
$loppukulutus=$kokonaiskulutus*1.12;
if($ika<20){
  $loppukulutus=$loppukulutus*1.03;
      $_SESSION['loppu']=$loppukulutus;
}
else if($ika<=20&&$ika<30){
  $loppukulutus=$loppukulutus;
      $_SESSION['loppu']=$loppukulutus;
}
else if($ika<=30&&$ika<40){
  $loppukulutus=$loppukulutus*0.97;
      $_SESSION['loppu']=$loppukulutus;
}
else if($ika<=40&&$ika<50){
  $loppukulutus=$loppukulutus*0.94;
      $_SESSION['loppu']=$loppukulutus;
}
else{
  $loppukulutus=$loppukulutus*0.91;
      $_SESSION['loppu']=$loppukulutus;
}
}
else if($paino>=100){
  $loppukulutus=$kokonaiskulutus*1.18;
  if($ika<20){
    $loppukulutus=$loppukulutus*1.03;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=20&&$ika<30){
    $loppukulutus=$loppukulutus;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=30&&$ika<40){
    $loppukulutus=$loppukulutus*0.97;
        $_SESSION['loppu']=$loppukulutus;
  }
  else if($ika<=40&&$ika<50){
    $loppukulutus=$loppukulutus*0.94;
        $_SESSION['loppu']=$loppukulutus;
  }
  else{
    $loppukulutus=$loppukulutus*0.91;
    $_SESSION['loppu']=$loppukulutus;
  }

}
}
}

$conn = new mysqli($servername, $username, $password, $dbname);

// Tarkistetaan tietokantayhteys
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Suoritetaan tietokantakysely
$sql = "INSERT INTO liikunta(Kayttaja_kayttajaId,Paivamaara,Tunnit,Kalorit,liikuntamuoto) VALUES($kayttajaid,'$pvm1',$tunnit,$loppukulutus,'$liikuntamuoto')" ;
$result = $conn->query($sql);
  header("refresh:2;url=liikuntasuoritukset.php");
?>
