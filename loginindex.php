<?php
  session_start();
?>

<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>


        <form class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" action="login.php" method="POST">
          <div class="w3-section ">
            <p> (Naudoti admin admin) </p>
            <label><b>Jūsų prisijungimo vardas</b> <b style="color:red" > * </b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Prisijungimo vardas" name="vardas" required>
            <label><b>Jūsų slaptažodis</b> <b style="color:red" > * </b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Slaptažodis" name="slaptazodis" required>
            </select>

            <button class="w3-button w3-block w3-green w3-padding w3-margin-bottom" type="submit">Prisijungti</button>
             <a class="w3-button w3-block w3-green w3-padding" href="index.php"> Grįžti </a>
          </div>
        </form>



        <?php
            if (isset($_SESSION['id'])){
               header("Location: data2.php");
            }
        ?>


</body>
</html>
