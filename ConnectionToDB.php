<?php
class Connection{
    public $serverName = "localhost:3306";
    public $userName = "root";
    public $password = "Prasad@321";
    public $DBName = "AddressBookDB";
    public $conn;

    public function ConnectToDB(){
        //create connection
        $this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->DBName);

        //Die if connection was not successful
        if(!$this->conn){
            die("Sorry, We failed to connect :" . mysqli_connect_error());
        }
        else{
            echo "Connection is successful! \n";
        }
        return $this->conn;
    }
}  
?>