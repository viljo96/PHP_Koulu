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
</style>
</head>
<body>
<?php
function poistaRivi(){
  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql ="DROP FROM liikunta WHERE";
  $result = $conn->query($sql);
}
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
$Button1="<button class=\"delete\" onclick=\"poistaRivi();\">poista</button>";
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
      echo$row1.$td1.$row["liikuntamuoto"].$td2.$td1.$row["Tunnit"].$td2.$td1.$row["Paivamaara"].$td2.$td1.$row["Kalorit"].$td2.$td1.$Button1.$td2.$row2;
    }
    echo $table2;
  }


?>
</body>
</html>
