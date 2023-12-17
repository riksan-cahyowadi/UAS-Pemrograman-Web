<?php
if ( isset($_GET["id"]) ){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "daftar_profil";

    //Koneksi ke database 
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM identitas WHERE id=$id";
    $connection->query($sql);
}

    header("location: /UAS/index.php");
    exit;
?>