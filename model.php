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
class Users extends database{
    public function signup(){
        if (isset($_POST['signup'])) {
            $username = $_POST['username'];
            $password = $_POST['password1'];
        
        
            $query = "INSERT INTO users (USERNAME ,  PASSWORD ) VALUES ('$username'  , '$password' ) ";
            mysqli_query($this->conn, $query);
            // $_SESSION['message'] = "your account has ben aded avec seccus";
            // $_SESSION['alert'] = "alert alert-success";
            /* header('location: index.php');*/
            // $_SESSION['message'] = "has ben added avec seccus";
            // $_SESSION['alert'] = "alert alert-success";
        }
        
        // if(isset($_POST['signup'])) {
            
            
            // if (isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['password2']) ){
            //     echo "<script>alert('yes ')</script>";
            // }
            // else {
            //     // echo "<script>alert('no ')</script>";
            // }
        // }
    }
    public function login(){
        if (isset($_POST['login'])) {
            echo $username = $_POST['username'];
            echo $password = $_POST['password'];
          
            $query = "SELECT * FROM users WHERE USERNAME='$username' AND PASSWORD='$password' ";
            $resultat = mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($resultat);
            $count = mysqli_num_rows($resultat);
            if ($count == 1) {
              if (isset($_POST['check'])) {
                setcookie('username', $username, time() + 60 * 60 * 24);
                setcookie('password', $password, time() + 60 * 60 * 24);
              }
            //   print_r($row);
             echo $_SESSION['USERNAME'] = $row['USERNAME'];
              header('location:profile.php');
              
            } else {
            //   $error = "invlid password or email ";
            }
          }
    }
    
}

class Contact extends Users
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

                    $query = "INSERT INTO contacts (NAME , EMAIL , PHONE , ADRESS) VALUES ('$name' , '$email' ,'$phone' , '$adress') ";
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
        // $data = null;
        $query = "SELECT * FROM contacts ";
        $sql = $this->conn->query($query) ;
        $row = mysqli_fetch_assoc($sql) ;
        
        // if ($sql = $this->conn->query($query)) {
        //     while ($row = mysqli_fetch_assoc($sql)) {
        //         $data[] = $row;
        //     }
        // }
        return $sql;
    }
    public function suprimer()
    {
        if (isset($_GET['supermer'])) {
            $id = $_GET['supermer'];
            $query = "DELETE FROM contacts WHERE CONTACT_ID  = '$id'";
            mysqli_query($this->conn, $query);
            // $this->conn->query($query) ;
            echo "<script>window.location.href='contact.php';</script>";
        }
    }

    public function afficherSeule($id)
    {
        $data = null;
        $query = "SELECT * FROM contacts WHERE CONTACT_ID  = '$id'";
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


            $queri = "UPDATE contacts SET NAME = '$name' , EMAIL = '$email' , PHONE = '$phone' , ADRESS = '$adress'   WHERE CONTACT_ID ='$id'";
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
