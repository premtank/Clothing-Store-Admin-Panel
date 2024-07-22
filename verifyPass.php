<?php
    require("connectDB.php");

    $sql="SELECT password FROM User WHERE name='".$_POST['username']."'";
    $result=$con->query($sql);
    if($result->num_rows>0){
        $record=$result->fetch_assoc();
        $password=password_verify($_POST['password'],$record['password']);
        if($password){
            header("Location: Dashboard.php");
            exit;            
        }
    }else{
        echo "User not found!";
    }
    
    require("disconnectDB.php");

?>