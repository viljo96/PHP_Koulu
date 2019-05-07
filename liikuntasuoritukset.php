<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<title>liikuntasuoritusten tarkastelu</title>
<style>
table{
  border: solid;
  color:black;
}
tr{
  border:solid;
  color:black;
}
td{
  border:solid;
}
th{
  border:solid;
}
  body{
    text-align:center;
  }
</style>
</head>
<body background="urheilukuva.jpg">
  <p>Aikaisemmat liikuntasuorituksesi</p>
<?php
session_start();
$servername = "127.0.0.1:50300";
$username = "azure";
$password = "6#vWHD_$";
$dbname="localdb";
$kayttajaid=$_SESSION['kayttajaId'];
$table1="<table>";
$table2="</table>";
$row1="<tr>";
$row2="</tr>";
$th1="<th>";
$th2="</th>";
$td1="<td>";
$td2="</td>";
$br="<br>";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql ="SELECT *FROM liikunta WHERE Kayttaja_kayttajaId=$kayttajaid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo $table1.$br;
    echo$row1.$br;
    echo$th1."Liikuntamuoto".$th2;
    echo$th1."Tunnit".$th2;
    echo$th1."Päivämäärä".$th2;
    echo$th1."Kalorit".$th2;
    echo$row2.$br;
    while($row = $result->fetch_assoc()) {
      echo$row1.$td1.$row["liikuntamuoto"].$td2.$td1.$row["Tunnit"].$td2.$td1.$row["Paivamaara"].$td2.$td1.$row["Kalorit"].$td2.$td1."<form method=\"POST\" action=\"/poistarivi.php\"><button type=\"submit\" name=\"id\" value=\"$row[RiviId]\">poista</button></form>".$td2.$row2;
    }
    echo $table2;
  }

?>
<a href="secondpage.php">Lisää liikuntasuorituksia</a>
  <a href="index.php">Kirjaudu ulos</a>
</body>
</html>
