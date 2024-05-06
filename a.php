<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p = $_POST["password"];
        $u =  $_POST['username'];
        if (empty($p) || empty($u)){ 
            echo "lỗi không nhập";
        } else { 
            $server_name = "THANHHA";
            $connection = array("Database"=>"DEMO", "UID"=>"PS20520-THANHHA","PWD"=>"thanhha30022031");
            $conn = sqlsrv_connect( $server_name, $connection);

            if($conn){ 
                echo "sucess";
                $sql = "select * from USERS where userid = '$u' and password ='$p'";

            $stmt = sqlsrv_query( $conn, $sql);
            if( $stmt === false ) {
                die( print_r( sqlsrv_errors(), true));
            } else { 
                while ($row = sqlsrv_fetch_array($stmt)) {
                    // This never prints.
                    echo "row:<br>"; var_dump($row[0]); echo "<br><br>";

                }
                
            }
            } else { 
                echo "Connect";
                die( print_r(sqlsrv_errors(), true));
            }
        }
?>
</body>
</html>