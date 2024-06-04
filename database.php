<?php


//1) Create database fashion store

// $sql = "CREATE DATABASE FashionStore";

// if($con->query($sql) === TRUE){
//     echo "<p>Database FashionStore created.</p>";
// }
// else{
//     echo "<p>Error! creating FashionStore database.</p>";
//     die("Bye Bye php");
// }

//2) Create tables

//i) Category

// $sql = "CREATE TABLE Category ( category_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                                 name VARCHAR(20) NOT NULL )";

// if($con->query($sql) === TRUE){
//     echo "Category table created.";
// }                                
// else{
//     echo "Error! creating Category table.".$con->error;
//     die;
// }

// $Category1="Casual Shirt";
// $Category2="Office Shirt";
// $Category3="Trouser";
// $Category4="Court";
// $Category5="Shoes";


// $sql = "INSERT INTO Category ( name ) VALUES ('".$Category5."') ";

// if($con->query($sql) === TRUE){
//     echo "Categories Inserted.";
// }                                
// else{
//     echo "Error! inserting Category data.".$con->error;
//     die;
// }

//ii) Fit

// $sql = "CREATE TABLE Fit ( fit_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                                 fit_type VARCHAR(20) NOT NULL )";

// if($con->query($sql) === TRUE){
//     echo "Fit table created.";
// }                                
// else{
//     echo "Error! creating Fit table.".$con->error;
//     die;
// }

// $fit_type1="Slim";
// $fit_type2="Skinny";
// $fit_type3="Classic";

// $sql = "INSERT INTO Fit ( fit_type ) VALUES ('".$fit_type1."') ";
// $sql = "INSERT INTO Fit ( fit_type ) VALUES ('".$fit_type2."') ";
// $sql = "INSERT INTO Fit ( fit_type ) VALUES ('".$fit_type3."') ";

// if($con->query($sql) === TRUE){
//     echo "Fit Data Inserted.";
// }                                
// else{
//     echo "Error! inserting Fit data.".$con->error;
//     die;
// }

//iii) Occassion

// $sql = "CREATE TABLE Occassion ( occassion_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                                 occassion_type VARCHAR(20) NOT NULL )";

// if($con->query($sql) === TRUE){
//     echo "Occassion table created.";
// }                                
// else{
//     echo "Error! creating Occassion table.".$con->error;
//     die;
// }

// $occassion_type1="Casual";
// $occassion_type2="Work";
// $occassion_type3="Universal";
// $occassion_type4="Active";
// $occassion_type5="Evening";


// $sql = "INSERT INTO Occassion ( occassion_type ) VALUES ('".$occassion_type1."') ";
// $sql = "INSERT INTO Occassion ( occassion_type ) VALUES ('".$occassion_type2."') ";
// $sql = "INSERT INTO Occassion ( occassion_type ) VALUES ('".$occassion_type3."') ";
// $sql = "INSERT INTO Occassion ( occassion_type ) VALUES ('".$occassion_type4."') ";
// $sql = "INSERT INTO Occassion ( occassion_type ) VALUES ('".$occassion_type5."') ";


// if($con->query($sql) === TRUE){
//     echo "Occassion Data Inserted.";
// }                                
// else{
//     echo "Error! inserting Occassion data.".$con->error;
//     die;
// }

//iv) Fabric

// $sql = "CREATE TABLE Fabric ( fabric_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                                 fabric_type VARCHAR(20) NOT NULL )";

// if($con->query($sql) === TRUE){
//     echo "Fabric table created.";
// }                                
// else{
//     echo "Error! creating Fabric table.".$con->error;
//     die;
// }

// $fabric_type1="Cotton";
// $fabric_type2="Denim";
// $fabric_type3="Chiffon";

// $sql = "INSERT INTO Fabric ( fabric_type ) VALUES ('".$fabric_type1."') ";
// $sql = "INSERT INTO Fabric ( fabric_type ) VALUES ('".$fabric_type2."') ";
// $sql = "INSERT INTO Fabric ( fabric_type ) VALUES ('".$fabric_type3."') ";

// if($con->query($sql) === TRUE){
//     echo "Fabric Data Inserted.";
// }                                
// else{
//     echo "Error! inserting Fabric data.".$con->error;
//     die;
// }

//v) Wash Care

// $sql = "CREATE TABLE WashCare ( washcare_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                                 washcare_type VARCHAR(20) NOT NULL )";

// if($con->query($sql) === TRUE){
//     echo "WashCare table created.";
// }                                
// else{
//     echo "Error! creating WashCare table.".$con->error;
//     die;
// }

// $washcare_type1="Machine Wash";
// $washcare_type2="Dry Clean";
// $washcare_type3="hand Wash";

// $sql = "INSERT INTO WashCare ( washcare_type ) VALUES ('".$washcare_type1."') ";
// $sql = "INSERT INTO WashCare ( washcare_type ) VALUES ('".$washcare_type2."') ";
// $sql = "INSERT INTO WashCare ( washcare_type ) VALUES ('".$washcare_type3."') ";


// if($con->query($sql) === TRUE){
//     echo "WashCare Data Inserted.";
// }                                
// else{
//     echo "Error! inserting WashCare data.".$con->error;
//     die;
// }

//v) Product

// $sql = "CREATE TABLE Product ( product_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                                price INT(10) UNSIGNED NOT NULL,
//                                size VARCHAR(10) NOT NULL,
//                                description TEXT NOT NULL,
//                                imagepath VARCHAR(20) NOT NULL,
//                                color VARCHAR(10),
//                                fit INT(4) NOT NULL,
//                                fabric INT(4) NOT NULL,
//                                occassion INT(4) NOT NULL,
//                                washcare VARCHAR(20) NOT NULL,
//                                category_id INT(4) UNSIGNED,
//                                FOREIGN KEY (category_id) REFERENCES Category(category_id))";

// if($con->query($sql) === TRUE){
//     echo "Product table created.";
// }                                
// else{
//     echo "Error! creating Product table.".$con->error;
//     die;
// }

//Deleting data

$sql="DELETE FROM Category WHERE category_id=7";
if($con->query($sql) === TRUE){
    echo "Data Deleted Successfully.";
}
else{
    echo "Error! Deleting Data.";
}


?>