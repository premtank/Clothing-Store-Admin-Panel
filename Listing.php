<?php

include("initiate.php");
require("connectDB.php");
require("disconnectDB.php");

$file = fopen("data.csv","r");
$data=[];
while(!feof($file)){
  $product=fgetcsv($file);
  array_push($data,$product);
}

//<!-- Card structure -->
  echo '<div class="container">';
  echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 card-structure">';
    foreach($data as $product){
      echo '
      <a href="Detailes.php?id='.$product[0].'">
      <div class="col">
      <div class="card">
          <img src="'.$product[1].'" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">'.$product[2].'</h5>
            <p class="card-text">'.$product[3].'</p>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>'.$product[4].'</b></li>
          </ul>
          <div class="card-body d-flex justify-content-between">
          <i class="fa-solid fa-pen" style="color: #333333;"></i>
            <i class="fa-solid fa-trash" style="color: #333333;"></i>
          </div>
          </div>
          </div>
        </a>'  ;
        }  
    echo "</div>";
    echo "</div>";
  fclose($file);
  
  ?>

  <!-- End of Card structure -->

</body>

<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

</html>