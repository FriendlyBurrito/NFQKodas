<?php

include("connect.php");


$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$amzius = $_POST['amzius'];
$telefonas = $_POST['telefonas'];
$pastas = $_POST['pastas'];
$diena = $_POST['diena'];
$valanda = $_POST['laikas'];
$data = date('Y-m-d');
/*$pavarde = $_POST['amzius'];
$pastas = $_POST['pastas'];
$telefonas = $_POST['telefonas']*/

 echo $vardas . " " . $pavarde . " " . $amzius . " " . $telefonas . " " . $pastas . " " . $diena . " " . $laikas;
 $sql = "INSERT INTO testavimas.nariai (Vardas, Pavarde, Amzius, Telefonas, Epastas, Diena, Valanda, RegistracijosData)
 VALUES ('$vardas','$pavarde', '$amzius', '$telefonas', '$pastas' , '$diena', '$valanda', '$data')";

 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $conn->close();


header("location: index.php#Preke");



?>
