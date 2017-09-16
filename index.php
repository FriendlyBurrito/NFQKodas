<!DOCTYPE HTML>
<html>

<?php
include("connect.php");
?>

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
    <a href="#Pagrindinis" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Klubas</a>
    <a href="#Preke" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Treniruotės</a>
    <a href="#Kontaktai" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Kontaktai</a>
    <a href="data2.php"  class="w3-bar-item w3-button w3-padding-large w3-hide-small">Duombazė</a>
  </div>
</div>




  <div style="max-width:100%">
    <img class="mySlides" src="first.jpg" style="width:100%">
    <img class="mySlides" src="third.jpg" style="width:100%">
    <img class="mySlides" src="second.jpg" style="width:100%">

  </div>

  <!-- The Modal -->
  <div id="id01" class="Modal">
    <div class="ModalContent w3-card-4 BottomAnimation" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="add.php" method="POST">
        <div class="w3-section">
          <label><b>Jūsų vardas</b> <b style="color:red" > * </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Vardas" name="vardas" required>
          <label><b>Jūsų pavardė</b> <b style="color:red" > * </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Pavardė" name="pavarde" required>
          <label><b>Jūsų amžius</b> <b style="color:red" > * </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Amžius" name="amzius" required>
          <label><b>Jūsų telefonas</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Telefonas" name="telefonas" >
          <label><b>Jūsų elektroninis paštas </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Elektroninis paštas" name="pastas" >

          <select class="w3-input w3-border w3-margin-bottom" name="diena" required>
                <option value="" disabled="disabled" selected="selected">Pasirinkti užsimėmimų dieną</option>
                <option value="Pirmadienis">Pirmadienis</option>
                <option value="Trečiadienis">Trečiadienis</option>
                  <option value="Penktadienis">Penktadienis</option>
          </select>

          <select class="w3-input w3-border w3-margin-bottom" name="laikas" required >
                <option value="" disabled="disabled" selected="selected">Pasirinkti užsimėmimų laiką</option>
                <option value="13:00">13:00</option>
                <option value="17:00">17:00</option>
                <option value="20:00">20:00</option>
          </select>

          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Registruotis</button>
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
    setTimeout(slideshow, 3000); // Change image every 2 seconds
}

</script>




   <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Pagrindinis">
    <h2 class="w3-wide">KLUBAS „GYNĖJAS“</h2>
     <p class="w3-opacity"><i>Maišytų kovos menų savigynos užsiėmimai </i></p>
     <br>
      <p  class="Justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
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
     <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large"> Registruotis </button>

    </div>
  </div>



    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" >
    <h2 class="w3-wide" id="Kontaktai" >KONTAKTAI</h2>
    <p class="w3-opacity"><i> Turite klausimų ? Kreipkitės ! </i></p>
      <div style="float:left;text-align:left;">
    <p > <b> Adresas: </b> <br> Kauno sporto halė <br> Perkūno al. 5, Kaunas 44221 </p>
    </div>

    <div style="float:right;text-align:left;">
    <p> <b> Asmeninė informacija: </b> <br> Paulius Vizbara <br> tel.868572443 </p>
    </div>

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

</body>



</html>
