<?php

include('constains.php');

class Database{
    private $DB;

    public function __construct($name)
    {
        $this->DB = new PDO("mysql:host=" . DB_HOST . ";dbname=$name", DB_USER, DB_PASS);  // to login db
    }

    public function myExec($q){
        $this->DB->exec($q);
    }

    
    public function insert(){

        if(isset($_POST['submit'])){
            // echo 'yes';

            //Validation for PHP
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])){

                    // echo $name = $_POST['name'];
                    // echo $email = $_POST['email'];
                    // echo $msg = $_POST['msg'];

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<script> alert("Your Email is not right!..");</script>';
                        echo '<script> window.location.href = "contact.php";</script>';
                        exit(0);

                    }
                    $msg = $_POST['msg'];
                    

                    $q = "INSERT INTO msg(name, email, msg) VALUES ('$name','$email', '$msg')";
                    if( $stmt = $this->DB->exec($q) ){
                        echo '<script> alert("THIS MES SENDED!..");</script>';
                        echo '<script> window.location.href = "contact.php";</script>';
                       
                       

                    }
                  

                   
                    // myExec($q);
                    
                }

                // For validation form in PHP
                // else{
                //     echo '<script> alert("PLZ, COMPLETE DATA IN THIS FORM!..");</script>';
                //     echo '<script> window.location.href = "contact.php";</script>';

                // }
            }
        }
    }

    

    
}

$DB = new Database(DB_DATABASE);
?>