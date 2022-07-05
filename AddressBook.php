<?php
    /*
    Ability to create a contact in AddressBook with first name, last name, address, state, city, zip, phone number and email
    */
    include "ConnectionToDB.php";
    class AddressBook{ 
        //Function to create table in database
        public function createTable(){  
            $obj = new Connection();  
            $conn = $obj->ConnectToDB();   
            $sql = "CREATE TABLE contact_info(id INT(3) NOT NULL AUTO_INCREMENT, firstname VARCHAR(15) NOT NULL, lastname VARCHAR(15) NOT NULL,
                    address VARCHAR(30) NOT NULL, city VARCHAR(15) NOT NULL, state VARCHAR(15) NOT NULL, zipcode VARCHAR(15) NOT NULL,
                    mobilenumber VARCHAR(15) NOT NULL, email VARCHAR(15) NOT NULL, PRIMARY KEY (id))";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "Table created successfully";
            }
            else{
                echo "Table NOT created";
            }
        }
    }

    //Object
    $addressBook = new AddressBook();
    $addressBook->createTable();
?>