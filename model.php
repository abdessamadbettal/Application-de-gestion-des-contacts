<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=gestion_contact", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// $dsn = 'mysql:host=localhost;dbname=gestion_contact';
// $user = 'root'; 
// $pass = '' ;
// try {
//     $db = new PDO($dsn,$user,$pass);
//     // $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo 'connected';
// }
// catch(PDOException $e) {
// echo 'failed ' . $e->getMessage();
// }

// $servername = "localhost" ;
// function connexion(){
//     try{
//       return new PDO('mysql:host=localhost;dbname=gestion_contact','root','');
//     }catch(Exception $e){
//      return 'connection problem'.$e->getMessage();
//     }
// }
// $con=connexion();

// if($con){echo "mzn";
// }
// class Model {
// private $server ="localhost";
// private $username ="root";
// private $password ="";
// private $dbname ="gestion_contact";
// private $conn ;
// public function __construct()
// {
//     try{
//         $this->conn =new mysqli($this->server,$this->username,$this->password,$this->dbname);
//     }catch(Exception $e){
//         echo "connection failed" . $e->getMessage();
//     }
    
// }
// public function insert(){
//     if (isset($_POST['submit'])) {
//         echo "yes";
//     }
// }
// }

// *pour tester
// $servername = "localhost" ;
// $username = "root" ;
// $password = "" ;
// $dataname = "gestion_contact" ;

// $connecter = mysqli_connect ($servername , $username , $password , $dataname) ;

// if ($connecter -> connect_error) {
//     die ( "connection failed" .$connecter -> connect_error) ;
// }
// else{
//     echo 'connected' ;
// }
// ***** pour pdo
// function connexion(){
//     try{
//       return new PDO('mysql:host=localhost;dbname=contact_bd','root','');
//     }catch(Exception $e){
//      return 'connection problem'.$e->getMessage();
//     }
// }
// $con=connexion();
