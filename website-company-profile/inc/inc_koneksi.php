<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db       = "idpw";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("gagal");
}else{
    echo "koneksi berhasil";
}