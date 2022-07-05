<?php
    include "ConnectionToDB.php";
    //create a DataBase
    $dbName = readline("Enter database name :");
    $sql = "create database $dbName";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "The DataBase created successfully \n";
    }
    else{
        echo "The database was not created bcoz of this error---->" . mysqli_error($conn);
    }
?>