<?php
include("connect.php");

$sql = "SELECT * FROM testavimas.sunys";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo "id: " . $row["ID"]. " - Name: " . $row["Vardas"]. " " . $row["Amzius"]. "<br>";
 }


?>
