<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>


<body>




  <div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Pradžia</a>
    <a href="#Pagrindinis" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Treniruotės</a>
    <a href="#Preke" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Placeholder</a>
    <a href="#Kontaktai" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Kontaktai</a>
  </div>
</div>



  <div style="max-width:100%">
    <img class="mySlides" src="https://i.pinimg.com/originals/2c/7d/1f/2c7d1ff79e461fe7c482f0ed70fadc4a.jpg" style="width:100%">
    <img class="mySlides" src="https://i.ytimg.com/vi/V3cURkdd_pk/maxresdefault.jpg" style="width:100%">
    <img class="mySlides" src="https://wallpaperscraft.com/image/fencing_sports_white_background_79983_1920x1080.jpg" style="width:100%">
  </div>

  <!-- The Modal -->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 BottomAnimation" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>


    </div>
  </div>


 <script>
var myIndex = 0;
slideshow();

function slideshow() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
      myIndex = 1;
    }
    x[myIndex-1].style.display = "block";
    setTimeout(slideshow, 4000); // Change image every 2 seconds
}


</script>




   <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Pagrindinis">
    <h2 class="w3-wide">PRADŽIA</h2>
      <p  class="Justify">Žavitės kovų menais ? Norite išbandyti kovas kardais ? Puiku ! Siūlome Jums fechtavimosi pamokas Kaune, kur
      galite Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna
      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
       aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
         non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
   </div>

  <div class="w3-black">
     <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px"  id="Preke">
    <h2 class="w3-wide">TRENIRUOTĖS</h2>
    <p class="Justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
     aute irure dolor in reprehenderit in voluptate velit esse cillum
      dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
       non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
     <br>
     <br>
     <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>

    </div>
  </div>



    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" >
    <h2 class="w3-wide" id="Kontaktai" >KONTAKTAI</h2>
    <p> Turite klausimų ? Parašykite ! </p>
    <p style="float:left;text-align:left;"> Paulius Vizbara <br> 868572443 </p>
  <!--<form style="color:black" action="" method="post">
      <input type="text" name="vardas" placeholder="Šuns vardas"><br>
      <input type="text" name="amzius" placeholder="Šuns amžius"><br>
      <input type="submit">
  </form>-->
   <!-- <button onclick="document.getElementById('id01').style.display='block'"
  class="w3-button">Open Modal</button>-->

  <div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOQQ0jGFZ5fKLKyOjjX0rRESb5yjv3XE0&callback=myMap"></script>

  </div>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "gravity123";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

 /*$vardas = $_POST['vardas'];
 $amzius = $_POST['amzius'];

  echo $vardas . " " . $amzius;*/
  /*$sql = "INSERT INTO testavimas.sunys (Vardas, Amzius)
  VALUES ('Reksas',15)";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }*/

  $conn->close();
  ?>

</body>



</html>
