
<?php
session_start();
include("connect.php");
$vardas = $_POST['vardas'];
$slaptazodis = $_POST['slaptazodis'];

$sql = "SELECT * FROM testavimas.administratoriai where vardas='$vardas' AND slaptazodis = '$slaptazodis'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()){
   echo '<script type="text/javascript">
   alert("Neteisingas prisijungimas!");
   window.location.href="loginindex.php";</script>';


}
else {
  $_SESSION['id'] = $row['id'];
  header("Location: loginindex.php");
}


?>
