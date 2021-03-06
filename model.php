<?php
session_start();
class database
{
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
class Users extends database
{
    public $user_id;
    public function UserRegister($username,  $password1)
    {
        // $password = mysqli_real_escape_string($this->conn,$password1) ;
        $password = md5($password1);
        $username;
        $query = "INSERT INTO users (USERNAME ,  PASSWORD ) VALUES ('$username' ,'$password' ) ";
        $qr =   mysqli_query($this->conn, $query);
        return $qr;
    }
    public function isUserExist($username)
    {
        $query = "SELECT * FROM users WHERE USERNAME ='$username'  ";
        $qr = mysqli_query($this->conn, $query);
        $row = mysqli_num_rows($qr);
        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function login()
    {
        if (isset($_POST['login'])) {
             $username = $_POST['username'];
             $password = $_POST['password'];
            // echo "<br>" ;
            // $password = mysqli_real_escape_string($this->conn,$password) ;
             $password1 = md5($password) ;

            $query = "SELECT * FROM users WHERE USERNAME='$username' AND PASSWORD = '$password1' ";
            $resultat = mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($resultat);
            $count = mysqli_num_rows($resultat);
            if ($count == 1) {
                if (isset($_POST['check'])) {
                    setcookie('username', $username, time() + 60 * 60 * 24);
                    setcookie('password', $password, time() + 60 * 60 * 24);
                }
                $_SESSION['LAST_LOGIN'] = $row['LAST_LOGIN'];
                $_SESSION['ID_USER'] = $row['ID_USER'];
                $query = "UPDATE users SET 	LAST_LOGIN = NOW() WHERE ID_USER = " . $_SESSION['ID_USER'];
                $sql = $this->conn->query($query);
                $_SESSION['DATE_REGISTER'] = $row['DATE_REGISTER'];
                $_SESSION['USERNAME'] = $row['USERNAME'];
                header('location:profile.php');
            } else {
                $_SESSION['usenameExist'] = "invlid password or email";
            }
        }
    }
    // ? signup avec un autre methode
    /* public function signup()
    {
        if (isset($_POST['signup'])) {
            $username = $_POST['username'];
            $password = $_POST['password1'];
            $query = "INSERT INTO users (USERNAME ,  PASSWORD , LAST_LOGIN, `DATE_REGISTER`) VALUES ('$username'  , '$password' , '2022-04-19 19:28:32.000000', '2022-04-19 19:28:32.000000') ";
            mysqli_query($this->conn, $query);   
        }
    } */
}

class Contact extends database
{

    
    public function ajouter($id_user)
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['adress'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress'])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $adress = $_POST["adress"];

                    $query = "INSERT INTO contacts (NAME , EMAIL , PHONE , ADRESS , USER_FK) VALUES ('$name' , '$email' ,'$phone' , '$adress' ,'$id_user') ";
                    $sql = $this->conn->query($query);
                    $_SESSION['message'] = "has ben added avec seccus";
                    $_SESSION['alert'] = "alert alert-success";
                } else {
                    echo "<script>alert('empty');</script>";
                }
            }
        }
    }

    public function aficher($id)
    {
        $query = "SELECT * FROM contacts where USER_FK = '$id' ";
        $sql = $this->conn->query($query);
        $row = mysqli_fetch_assoc($sql);
        return $sql;
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
            $_SESSION['message'] = "has ben modified avec seccus";
            $_SESSION['alert'] = "alert alert-primary";
            // header('location: contact.php');
        }
    }
    public function suprimer()
    {
        if (isset($_GET['supermer'])) {
            $id = $_GET['supermer'];
            $query = "DELETE FROM contacts WHERE CONTACT_ID  = '$id'";
            mysqli_query($this->conn, $query);
            $_SESSION['message'] = "has ben deleted avec seccus";
            $_SESSION['alert'] = "alert alert-danger";
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
}
 