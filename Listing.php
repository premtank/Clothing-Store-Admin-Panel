<?php

include("initiate.php");
require("connectDB.php");

// Retrieve data from database
$sql="SELECT product_id,imagepath,category,description,price FROM Product";
$result=$con->query($sql);

//<!-- Card structure -->

echo '<div class="container">';
echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 mb-3 card-structure">';
if($result->num_rows>0){
  while($record=$result->fetch_assoc()){
    echo '
      <a href="Detailes.php?id='.$record['product_id'].'">
      <div class="col">
      <div class="card">
          <img src="Images/'.$record['imagepath'].'" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">'.$record['category'].'</h5>
            <p class="card-text">'.$record['description'].'</p>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>'.$record['price'].'</b></li>
          </ul>
          <!--<div class="card-body d-flex justify-content-between">-->
          <!--   <i class="fa-solid fa-pen" style="color: #333333;"></i>-->
          <!--   <i class="fa-solid fa-trash" style="color: #333333;"></i>-->
          <!--</div>-->
          </div>
          </div>
        </a>'  ;
  }
}
echo "</div>";
echo "</div>";

require("disconnectDB.php");  
  
?>

<!-- End of Card structure -->

</body>

<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

</html>