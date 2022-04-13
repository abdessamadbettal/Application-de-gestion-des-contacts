<?php
class Contact
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "gestion_contact";
    private $conn;
    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['adress'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress'])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $adress = $_POST["adress"];

                    $query = "INSERT INTO contact (NAME , EMAIL , PHONE , ADRESS) VALUES ('$name' , '$email' ,'$phone' , '$adress') ";
                    // $sql = $this->conn->query($query);
                    if ($sql = $this->conn->query($query)) {
                        // echo "<script>alert('contact add ')</script>";
                        echo "<script>window.location.href='contact.php';</script>";
                    }
                } else {
                    echo "<script>alert('empty');</script>";
                }
            }
        }
    }
    public function fetch()
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
    public function delete($id)
    {
        $query = "DELETE FROM contact where ID = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
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
    public function modifier($id)
    {
        if (isset($_POST['edit'])) {
            
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $adress = $_POST['adress'];
                
        
                $queri = "UPDATE contact SET NAME = '$name' , EMAIL = '$email' , PHONE = '$phone' , ADRESS = '$adress'   WHERE ID='$id'";
                mysqli_query($this->conn, $queri);
                // $_SESSION['message'] = "has ben modified avec seccus";
                // $_SESSION['alert'] = "alert alert-primary";
                // echo '<script>document.location.replace("index.php")</script>';
                header('location: contact.php');
            
            // $id = $_GET['edit'];
            // $query = "SELECT * FROM contact where ID = '$id'";
            // $result = mysqli_query($this->conn, $query);
            // $row = mysqli_fetch_assoc($result);
            
            // echo $name = $row['NAME'];
            // $email = $row['EMAIL'];
            // $phone = $row['PHONE'];
            // $enroll = $row['ADRESS'];
            // $date = $row['date'];

            // if (isset($_POST['modifier'])) {

            //     $name = $_POST['name'];
            //     $email = $_POST['email'];
            //     $phone = $_POST['phone'];
            //     $enroll = $_POST['enroll'];
            //     $date = $_POST['date'];

            //     $queri = "UPDATE students SET name = '$name' , email = '$email' , phone = '$phone' , enroll = '$enroll' , date = '$date'  WHERE id='$id'";
            //     mysqli_query($this->conn, $queri);
            //     $_SESSION['message'] = "has ben modified avec seccus";
            //     $_SESSION['alert'] = "alert alert-primary";
            //     // echo '<script>document.location.replace("index.php")</script>';
            //     header('location: ../student.php');
            // }
        }
    }
}


// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=gestion_contact", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

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
//     //  return 'connection problem'.$e->getMessage();
//     return false;
//     }
// }
// $con=connexion();

// if($con){echo "mzn";
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
