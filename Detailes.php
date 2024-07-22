<?php
include("initiate.php");
require("connectDB.php");

// Retrieve data from database
$sql = "SELECT * FROM Product WHERE product_id=" . $_GET['id'];
$result=$con->query($sql);

//<!-- Details card -->
if($result->num_rows>0){
  $record=$result->fetch_assoc();
    echo '
     <div class="container-fluid martop d-flex justify-content-center">
         <div class="card" style="max-width: 540px;">
             <div class="row g-0">
               <div class="col-md-4">
                 <img src="Images/'.$record['imagepath'].'"class="img-fluid rounded-start" alt="...">
               </div>
               <div class="col-md-8">
                 <div class="card-body">
                   <h5 class="card-title">'.$record['category'].'</h5>
                   <h4>'.$record['description'].'</h4>
                   <div class="row">
                    <div class="col-6">
                        <ul class="list-group list-group-flush">
                         <li class="list-group-item">'.$record['size'].'</li>
                         <li class="list-group-item">'.$record['color'].'</li>
                         <li class="list-group-item">'.$record['pattern'].'</li>
                         <li class="list-group-item">'.$record['fit'].'</li>
                       </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">'.$record['occassion'].'</li>
                            <li class="list-group-item">'.$record['fabric'].'</li>
                            <li class="list-group-item">'.$record['washcare'].'</li>
                          </ul>
                    </div> 
                   </div>
                   <p class="card-text">'.$record['description'].'</p>
                   <div class="card-body d-flex justify-content-end">
                    <i class="fa-solid fa-pen px-3" style="color: #333333;"></i>
                    <i class="fa-solid fa-trash" style="color: #333333;"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
     </div> ';
}
//<!-- End of Details card -->
require("disconnectDB.php");  

?>

</body>

<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

</html>    