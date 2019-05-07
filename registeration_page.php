<?php
//Alustetaan muuttujat
$servername = "127.0.0.1:50300";
$username = "azure";
$password = "6#vWHD_$";
$dbname="liikuntakanta";
$nimi=$_POST['enimi'];
$pass=$_POST['salasana'];
$kayttajanimi=$_POST['kayttajanimi'];
$ika=$_POST['ika'];
$paino=$_POST['paino'];
$kayttajaid="3";
//Luodaan tietokantayhteys
$conn = new mysqli($servername, $username, $password,$dbname);

//Tarkistetaan tietokantayhteys
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Luodaan ensimmäinen tietokantakysely
$sql ="SELECT * FROM kayttaja";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //Tarkistetaan, että annettuja tietoja ei ole tietokannassa
        if($row["kayttajanimi"]!=$kayttajanimi){
          echo"Rekisteröityminen onnistui!";
//Luodaaan käyttäjä tietokantaan
          $sql ="INSERT INTO kayttaja (KayttajaId,Paino,Nimi,ika,Salasana,kayttajanimi)
          VALUES('$kayttajaid','$paino','$nimi','$ika','$pass','$kayttajanimi')";
          $result = $conn->query($sql);
          //Siirrytään etusivulle
              header("refresh:2;url=index.php");
              break;

            }else{
              echo"Käyttäjänimi varattu";
              //Palataan takaisin
              header("refresh:2;url=rekisteroityminen.php");
              break;
            }

}
}


$conn->close();
?>
