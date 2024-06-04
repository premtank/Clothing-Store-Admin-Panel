<?php
include("initiate.php");

  $file = fopen("data.csv","r");
  $data=[];
  while(!feof($file)){
    $product=fgetcsv($file);
    array_push($data,$product);
  }
  //<!-- Details card -->
  foreach($data as $product){
    if($product[0]==$_GET['id']){
      echo '
     <div class="container-fluid martop d-flex justify-content-center">
         <div class="card" style="max-width: 540px;">
             <div class="row g-0">
               <div class="col-md-4">
                 <img src="Images/img-1.jpg" class="img-fluid rounded-start" alt="...">
               </div>
               <div class="col-md-8">
                 <div class="card-body">
                   <h5 class="card-title">$Casual Shirt</h5>
                   <h4>'.$product[4].'</h4>
                   <div class="row">
                    <div class="col-6">
                        <ul class="list-group list-group-flush">
                         <li class="list-group-item">XL</li>
                         <li class="list-group-item">Olive Green</li>
                         <li class="list-group-item">Solid</li>
                         <li class="list-group-item">Slim</li>
                       </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Casual</li>
                            <li class="list-group-item">Cotton</li>
                            <li class="list-group-item">Machine Wash, Gry Clean</li>
                          </ul>
                    </div> 
                   </div>
                   <p class="card-text">Casual Shirt for men. Go buy.</p>
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
  }
?>
    <!-- End of Details card -->

</body>

<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

</html>    