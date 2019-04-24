<?php
//Alustetaan muuttujat
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="liikuntakanta";
$uname=$_POST['enimi'];
$_SESSION['enimi']=$_POST['enimi'];
$pass=$_POST['salasana'];
// Luodaan tietokantayhteys
$conn = new mysqli($servername, $username, $password,$dbname);

// Tarkistetaan tietokantayhteys
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Suoritetaan tietokantakysely
$sql = "SELECT * FROM kayttaja WHERE kayttajanimi='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // Tarkistetaan täsmääkö annettu käyttäjänimi ja salasana tietokannassa oleviin
      if($row["kayttajanimi"]==$uname&&$row["Salasana"]==$pass){
        echo "Onnistui";
        $_SESSION['paino']=$row['Paino'];
        $_SESSION['ika']=$row['ika'];
        $_SESSION['kayttajaId']=$row['KayttajaId'];
        //Siirytään etusivulle
        header("refresh:2;url=secondpage.php");
        break;
      }
  }if($row["kayttajanimi"]!=$uname||$row["Salasana"]!=$pass){
    echo"Ei onnistu";
    // palataan takaisin
    header("refresh:2;url=index.php");
  }
} else {
    echo "Ei onnistu";
    header("refresh:2;url=index.php");

}

$conn->close();
?>
