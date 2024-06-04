<?php
  
    require("connectDB.php");

    $Category=$_POST["Category"];
    $sql="INSERT INTO Category ( name ) VALUES ('".$Category."')";

    if($con->query($sql)){
      echo "Category Inserted Successfully";
    }
    else{
      echo "Error! inserting category".$con->error;
      die;
    }

    require("disconnectDB.php");

  ?>