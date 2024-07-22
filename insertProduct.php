<?php
  
    require("connectDB.php");
 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $category=$_POST['category'];
    $price=$_POST["price"];
    $size=$_POST["size"];
    $pattern=$_POST["pattern"];
    $color=$_POST["color"];
    $size=$_POST["size"];
    $fit=$_POST["fit"];
    $occassion=$_POST["occassion"];
    $fabric=$_POST["fabric"];
    $description=$_POST["description"];
    
    $washcare=$_POST["washcare"];
    $washcare=implode(',',$washcare);    

    $target="Images/".basename($_FILES['image']['name']);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        echo "The File".basename($_FILES['image']['name'])."hase been uploaded";
    }else{
        echo "sorry! There was a problem uploading your file.";
    }    
    $imagepath=basename($_FILES['image']['name']);


    $sql="INSERT INTO Product(price,size,description,imagepath,color,fit,fabric,occassion,washcare,category,pattern)
          VALUES 
          ('".$price."','".$size."','".$description."','".$imagepath."','".$color."',
          '".$fit."','".$fabric."','".$occassion."','".$washcare."','".$category."','".$pattern."')";
    
    $result=$con->query($sql);
    if($result){
        echo "product Inserted Successfully";

    }else{
        echo "Error! inserting product".$con->error;
        die;
    }      
} 

    require("disconnectDB.php");

  ?>