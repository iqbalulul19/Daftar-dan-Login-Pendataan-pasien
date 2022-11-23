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

    $sql = "UPDATE tb_pasien SET nama_lengkap='$nama_lengkap', alamat='$alamat', jk='$jk', no_telp='$no_telp',
    agama='$agama', tanggal_masuk='$tanggal_masuk', gejala='$gejala', tempat_lahir='$tempat_lahir', 
    tanggal_lahir='$tanggal_lahir', no_kamar='$no_kamar' where id=$kode";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header('Location:pasien.php');
    } else{
        die ("gagal mengedit");
    }}
    else{
        die("akses dilarang");
    }
    ?>