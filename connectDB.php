<?php

// Connecting to database server(mysql)
  $servername = "localhost";
  $username = "root";
  $userpass = "1712Root@01";

  $con = new mysqli($servername,$username,$userpass);

  if($con->connect_error){
    echo "<p>Database server cannot be connected.</p>";
    die;
  }
  echo "<p>Database server connected successfully.</p>";

  $con->select_db("FashionStore");
  echo "<p>Database fashion store selected.</p>";
   
  //End of connection to database 


?>