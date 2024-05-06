<?php 
class Database {
    private static $instance = null;
    private $connection;

    // Private constructor to prevent creating new instances
    public function __construct() {
        $server_name = "THANHHA";
        $connectionOptions = array("Database"=>"DEMO", "UID"=>"PS20520-THANHHA","PWD"=>"thanhha30022031");
        $this->connection = sqlsrv_connect($server_name, $connectionOptions);
        if ($this->connection === false) {
            // Handle connection error
            die( print_r( sqlsrv_errors(), true));
        }
    }

    // Get the singleton instance
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Get the database connectionS
    public function getConnection() {
        return $this->connection;
    }

    public function login() {
        $error ="";
        if(isset($_POST['password']) && isset($_POST['username'])){
            $p = $_POST["password"];
            $u =  $_POST['username'];
            $n = "";
            $error = "Lỗi không tìm thấy tài khoản";
            if (empty($p) || empty($u)){ 
                $error = "Lỗi không nhập";
            } else { 
              // Example usage:
                $db = $this->getInstance();
                $conn = $db->getConnection();
    
                if($conn){ 
                    $sql = "select * from USERS where userid = '$u' and password ='$p'";
    
                $stmt = sqlsrv_query( $conn, $sql);
                if( $stmt === false ) {
                   $error = "Lỗi không tìm thấy tài khoản";
                     die( print_r(sqlsrv_errors(), true));  
                } else { 
                    while ($row = sqlsrv_fetch_array($stmt)) {
                        // This never prints.
                     
                        $_SESSION['user'] = $row[0];
                    }
                }
                } else { 

                     die( print_r(sqlsrv_errors(), true));  
                }
            }
        }
        return $error;
    }  
    
    public function getAllUsers($s) {
                        $db = $this->getInstance();
                $conn = $db->getConnection();
    

if ($conn) {
    $start = $s*4;
    $sql = "SELECT * FROM USERS ORDER BY USERID OFFSET ? ROWS FETCH NEXT 4 ROWS ONLY";
$params = array($start);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        // Handle query execution error
        die(print_r(sqlsrv_errors(), true));
    }

    $rows = [];
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        // Process each row
        $rows[] = $row;
    }
                    return $rows;
                }

                else { 

                    return [];
                }
     
    }

    public function getById($id) {
        $db = $this->getInstance();
        $conn = $db->getConnection();

        if($conn){ 
            $sql = "select * from USERS where userid = ?";
            $params = array($id);

            $stmt = sqlsrv_query( $conn, $sql, $params);
            if( $stmt === false ) {
                $error = "Lỗi không tìm thấy tài khoản";
                    die( print_r(sqlsrv_errors(), true));  
            } else { 
                
                    // This never prints.
                $rows = [];  
                while ($row = sqlsrv_fetch_array($stmt)) {
                    $rows[] = $row;
                }
                return $rows;
            }

            } else { 

                return [];
            }
    }

    public function deleteUsers($ids) {
        $db = $this->getInstance();
        $conn = $db->getConnection();

        if($conn){
            $sql = "delete from USERS where userid in (";
            //$comma_separated = explode(",", $ids);
         $sqlParams = array();
foreach ($ids as $index => $id) {
    $sql .= ($index > 0 ? ", " : "") . "?";
    $sqlParams[] = $id;
}
$sql .= ")";
            
            $stmt = sqlsrv_query( $conn, $sql, $sqlParams);
            if( $stmt === false ) {
                $error = "Lỗi không tìm thấy tài khoản";
                    die( print_r(sqlsrv_errors(), true));  
            } else { 
                
                    // This never prints.
                $rows = [];  
                while ($row = sqlsrv_fetch_array($stmt)) {
                    $rows[] = $row;
                }
                return $rows;
            }
        } else { 
            return [];
        }
    }

    public function updateUser($obj){ 
          $db = $this->getInstance();
        $conn = $db->getConnection();
           if($conn){
var_dump($obj['username']);
var_dump($obj['password']);
var_dump($obj['userid']);
            $sql = "update USERS set USERNAME = ? , PASSWORD =? where USERID = ?";
            $params = array($obj['username'], $obj['password'], $obj['userid']);

            $stmt = sqlsrv_query($conn, $sql, $params);
            if( $stmt === false ) {
    
                    die( print_r(sqlsrv_errors(), true));  
            } 
           } 
    }

        public function saveUser($obj){ 
          $db = $this->getInstance();
        $conn = $db->getConnection();
           if($conn){

            $sql = "Insert into USERS values (?,?,?)";
            $date = date("Y/m/d");
            $params = array($obj['username'], $obj['password'], $date);

            $stmt = sqlsrv_query($conn, $sql, $params);
            if( $stmt === false ) {
    
                    die( print_r(sqlsrv_errors(), true));  
            } 
           } 
    }
}
?>