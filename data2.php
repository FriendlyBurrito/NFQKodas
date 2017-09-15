<?php
include("connect.php");

$sql = "SELECT * FROM testavimas.nariai";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo   "Vardas: " . $row["Vardas"]. " " . $row["Pavarde"]. "   " .  $row["Epastas"]  . $row["Telefonas"] .  "<br>";
 }


?>
