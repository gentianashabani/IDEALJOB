<?php  
require_once("dbconfig.php");

$con= dbconfig::connect();


$sql = "CREATE database idealjob";
    $con->exec($sql);
    echo "U krijua databaza.";

?>