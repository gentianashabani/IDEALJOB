<?php  

class dbconfig{
public static function connect(){
    define("servername", "localhost");
    define("username", "root");
    define("password", "");
    define("dbname", "idealjob");
    try{
        $con = new PDO("mysql:host=localhost; dbname=idealjob", username, password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    return $con;
}
}

?>