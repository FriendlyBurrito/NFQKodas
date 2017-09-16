<html>


<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>



<?php

    include("connect.php");

    $sql = "SELECT * FROM testavimas.nariai";
    $result = $conn->query($sql);
    $number_of_results = mysqli_num_rows($result);
    $results_per_page = 5;

    $number_of_pages = ceil($number_of_results / $results_per_page);

    if (!isset($_GET['page'])){
      $page = 1;
    }
    else{
      $page = $_GET['page'];
    }

    $this_page_first_result = ($page-1)*$results_per_page;

    $sql = "SELECT * FROM testavimas.nariai ORDER BY Amzius LIMIT " . $this_page_first_result . "," . $results_per_page;
    //$sql = "SELECT * FROM testavimas.nariai LIMIT " . $this_page_first_result . "," . $results_per_page;
    $result = mysqli_query($conn,$sql);


    echo ' <div class="w3-top"> ';
    echo '<div class="w3-bar w3-black w3-card-2"> ';

    for ($page=1; $page<=$number_of_pages; $page++){
      echo '<a href="data2.php?page=' . $page . '" class="w3-bar-item w3-button w3-padding-large" >' . $page . '</a> ';
    }

    echo ' </div>';
    echo ' </div>';




    echo '<div class="w3-container w3-content w3-padding-64 style="max-width:800px""> ';
    echo '<table>';
      echo '<tr>';
    echo '<th> Vardas </th><th> Pavardė </th><th> Amžius </th><th> Telefonas </th><th> El.Paštas </th><th> Užsiėmimo diena </th><th> Užsiėmimo valanda </th><th> Registracijos data </th>';
      echo '</tr>';
    while ($row = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<th>' . $row["Vardas"] . '</th> <th>' . $row["Pavarde"] . '</th><th>' . $row["Amzius"] . '</th><th>' . $row["Telefonas"]
        . '</th><th>' . $row["Epastas"] . '</th><th>' . $row["Diena"] . '</th><th>' . $row["Valanda"] . '</th><th>' . $row["RegistracijosData"] . '</th> ';

          echo '</tr>';
    }
    echo '</table>';

  echo '  </div> ';
    ?>


</body>

</html>
