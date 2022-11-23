<?php
include("koneksi.php");

if(isset($_POST['Daftar'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];

    $sql = "INSERT INTO user (username, password, tempat_lahir, tanggal_lahir) 
    VALUES ('$username', '$password', '$tempat_lahir', '$tanggal_lahir')";

    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location:index.php?status=sukses');
    }else{
        header('Location:index.php?status=gagal');
    }
}
?>