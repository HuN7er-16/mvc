<?php

namespace App\Model;

use PDO;
use PDOException;

class Model{

    protected $connection;

    public function __construct__(){
        
        if(!isset($connection)){

            global $dbhost, $dbname, $dbusername, $dbpassword;
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

            try{

                $this->connection = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbusername, $dbpassword, $options);

            }catch(PDOException $e){

                echo 'there is some problem in connection : ' . $e->getMessage();

            }

        }

    }

    

}