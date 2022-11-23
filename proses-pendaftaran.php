<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $kode=$_POST['id'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $no_telp=$_POST['no_telp'];
    $agama=$_POST['agama'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $gejala=$_POST['gejala'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $no_kamar=$_POST['no_kamar'];


    $sql = "INSERT INTO tb_pasien (nama_lengkap, alamat, jk, no_telp, agama, tanggal_masuk, gejala, tempat_lahir, tanggal_lahir, no_kamar) 
    VALUES ('$nama_lengkap', '$alamat', '$jk', '$no_telp', '$agama', '$tanggal_masuk', '$gejala', '$tempat_lahir', '$tanggal_lahir', '$no_kamar')";
    $query=mysqli_query($koneksi, $sql);

    if($query){
        header('Location:tampil.php?status=sukses');
    }else{
        header('Location:tampil.php?status=gagal');
    }
    }
    ?>