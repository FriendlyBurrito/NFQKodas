<html>
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style2.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body>
      <?php
         session_start();
         if ( !isset($_SESSION['id'])){
              header("Location: loginindex.php");
         }
         include("connect.php");

         $sql = "SELECT * FROM testavimas.nariai";
         $result = $conn->query($sql);
         $number_of_results = mysqli_num_rows($result);
         $results_per_page = 10;
         $number_of_pages = ceil($number_of_results / $results_per_page);

         if (!isset($_GET['page'])){
           $page = 1;
         }
         else{
           $page = $_GET['page'];
         }

         $this_page_first_result = ($page-1)*$results_per_page;

         if (!isset($order))
           $order = "Vardas";

         $sql = "SELECT * FROM testavimas.nariai LIMIT " . $this_page_first_result . "," . $results_per_page;


         $result = mysqli_query($conn,$sql);




         echo ' <div class="w3-top"> ';
         echo '<div class="w3-bar w3-black"> ';
         for ($page=1; $page<=$number_of_pages; $page++){
           echo '<a href="data2.php?page=' . $page . '" class="w3-bar-item w3-button w3-padding-large" >' . $page . '</a> ';
         }

         ?>
      <a href="logout.php"  style="float:right;" class="w3-bar-item w3-button w3-padding-large" > ATSIJUNGTI </a>
      <form action="data2.php" method="POST">
         <input style="float:right;margin-right:40px" class="w3-bar-item w3-button w3-red w3-padding-large" type="submit" value="Ieškoti">
         <input style="float:right" class="w3-bar-item w3-input w3-padding-large" type="text" name="search" placeholder="Paieška...">
      </form>
      </div>
      </div>
      <div class="w3-padding-64 w3-container">
      <table id="myTable">
      <tr id ="firstRow">
         <form action="sort.php" method="post">
            <th>  Vardas</th>
            <th> Pavardė </th>
            <th> Amžius </th>
            <th> Telefonas </th>
            <th> El.Paštas </th>
            <th> Užsiėmimo diena </th>
            <th> Užsiėmimo valanda </th>
            <th> Registracijos data </th>
      </tr>
      </form>
      <?php
         if(isset($_POST['search'])){
             $searchkey= $_POST['search'];
             $searchkey=preg_replace("#[^0-9a-z!-:]#i", "", $searchkey);
             $sql ="SELECT * FROM testavimas.nariai WHERE Vardas LIKE '%$searchkey%' OR
             Pavarde LIKE '%$searchkey%' OR
             Amzius LIKE '%$searchkey%' OR
             Telefonas LIKE '%$searchkey%' OR
             Epastas LIKE '%$searchkey%' OR
             Diena LIKE '%$searchkey%' OR
             Valanda LIKE '%$searchkey%' OR
             RegistracijosData LIKE '%$searchkey%'";
             $result = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($result);

             if ($count > 0){
                 while($row=mysqli_fetch_array($result)){
                   echo '<tr>';
                   echo '<th>' . $row["Vardas"] . '</th> <th>' . $row["Pavarde"] . '</th><th>' . $row["Amzius"] . '</th><th>' . $row["Telefonas"]
                   . '</th><th>' . $row["Epastas"] . '</th><th>' . $row["Diena"] . '</th><th>' . $row["Valanda"] . '</th><th>' . $row["RegistracijosData"] . '</th> ';
                   echo '</tr>';

                 }
             }

         }


         while ($row = mysqli_fetch_array($result)){
             echo '<tr>';
             echo '<th>' . $row["Vardas"] . '</th> <th>' . $row["Pavarde"] . '</th><th>' . $row["Amzius"] . '</th><th>' . $row["Telefonas"]
             . '</th><th>' . $row["Epastas"] . '</th><th>' . $row["Diena"] . '</th><th>' . $row["Valanda"] . '</th><th>' . $row["RegistracijosData"] . '</th> ';

               echo '</tr>';
         }
         echo '</table>';
         echo '</div> ';


         ?>
   </body>
</html>
