<?php
/*$servername = "88.222.25.79";*/
$servername = "192.168.0.101";
$username = "justelis";
$password = "justelis";

// Create connection
$conn = @new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo '<div class=" w3-red  w3-container" style="width:100%"">
  <h3>Klaida!</h3>
  <p>Nepavyko prisijungti prie MySQL.</p>
</div>';

}
?>
