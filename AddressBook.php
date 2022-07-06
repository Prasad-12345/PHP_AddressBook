<?php
    /*
    *Ability to create a contact in AddressBook with first name, last name, address, state, city, zip, phone number and email
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

        //Function to insert data into table
        public function insertValuesIntoTable(){
            $obj = new Connection();  
            $conn = $obj->ConnectToDB();
            $firstName = readline("Enter first name :");
            $lastName = readline("Enter last name :");
            $address = readline("Enter address :");
            $city = readline("Enter city :");
            $state = readline("Enter state :");
            $zipcode = readline("Enter zipcode :"); 
            $mobilenumber = readline("Enter mobile number :");
            $email = readline("Enter email :");  
            $sql = "INSERT INTO contact_info(firstname , lastname , address , city , state , zipcode ,
                    mobilenumber , email) VALUES ($firstName, $lastName, $address, $city, $state, $zipcode, $mobilenumber, $email)";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "Data inserted successfully";
            }
            else{
                echo "Data not inserted";
            }
        }
    }

    //Object
    $addressBook = new AddressBook();
    $change = true;
    do{
        echo "Enter choice : 1.To Create Table\n 2.Insert values into table\n3.Exit\n";
        $choice = readline("");
        switch($choice){
            case 1:
                $addressBook->createTable();
                break;

            case 2:
                $addressBook->insertValuesIntoTable();

            default:
                $change = false;
        }
    }while($change) 
?>