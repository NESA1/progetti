<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "nesa";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
<?php
//stringa di connessione al DBMS senza passaggio di variabili  
$connessione = new PDO("mysql:host=localhost;dbname=nesa", "root", "");
//$connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>