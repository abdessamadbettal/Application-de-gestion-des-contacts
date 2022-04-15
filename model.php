<?php
class database {
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "gestion_contact";
    protected $conn;
    public function __construct()
    {
        // ? pour connecter par PDO
        // try {
        //     $this->conn = new PDO("mysql:host=$this->server;dbname=$this->dbname", $this->username, $this->password);
        //     // set the PDO error mode to exception
        //     $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     echo "Connected successfully";
        // } catch (PDOException $e) {
        //     echo "Connection failed: " . $e->getMessage();
        // }
        // ? pour connecter par mysqli
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
}
class Contact extends database
{
    
    public function ajouter()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['adress'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress'])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $adress = $_POST["adress"];

                    $query = "INSERT INTO contact (NAME , EMAIL , PHONE , ADRESS) VALUES ('$name' , '$email' ,'$phone' , '$adress') ";
                    $sql = $this->conn->query($query);
                    // if ($sql = $this->conn->query($query)) {
                    //     // echo "<script>alert('contact add ')</script>";
                    //     echo "<script>window.location.href='contact.php';</script>";
                    // }
                } else {
                    echo "<script>alert('empty');</script>";
                }
            }
        }
    }
    public function aficher()
    {
        $data = null;
        $query = "SELECT * FROM contact ";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function suprimer()
    {
        if (isset($_GET['supermer'])) {
            $id = $_GET['supermer'];
            $query = "DELETE FROM contact WHERE ID = '$id'";
            mysqli_query($this->conn, $query);
            // $this->conn->query($query) ;
            echo "<script>window.location.href='contact.php';</script>";
        }
    }

    public function afficherSeule($id)
    {
        $data = null;
        $query = "SELECT * FROM contact WHERE ID = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function modifier()
    {
        if (isset($_POST['edit'])) {
            $id = $_POST['contact_id'];
            $name = $_POST['editname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $adress = $_POST['adress'];


            $queri = "UPDATE contact SET NAME = '$name' , EMAIL = '$email' , PHONE = '$phone' , ADRESS = '$adress'   WHERE ID='$id'";
            mysqli_query($this->conn, $queri);
            // $_SESSION['message'] = "has ben modified avec seccus";
            // $_SESSION['alert'] = "alert alert-primary";
            header('location: contact.php');
        }
    }
}








// **** pour connecter par mysqli
    // private $server = "localhost";
    // private $username = "root";
    // private $password = "";
    // private $dbname = "gestion_contact";
    // private $conn;

// try {
//     $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
// } catch (Exception $e) {
//     echo "connection failed" . $e->getMessage();
// }

// try {
//     $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
// } catch (Exception $e) {
//     echo "connection failed" . $e->getMessage();
// }


// **** pour connecter par pdo
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
