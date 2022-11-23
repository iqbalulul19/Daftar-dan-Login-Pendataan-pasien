<html>
<head>
</head>
<body>
<?php
    session_start();
    if($_SESSION['status']!="LOGIN"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username'];?>! anda telah login.</h4>

    <h1>Data Pasien</h1>
<?php
include("koneksi.php");
?>

<form action="pasien.php" method="GET">
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>

<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>

    <table border="1">
        <tr>
            <th>No. Pasien</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No. Telepon</th>
            <th>Agama</th>
            <th>Tanggal Masuk</th>
            <th>Gejala</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No. Kamar</th>
            <th>aksi</th>
        </tr>
        
    
<?php
include("koneksi.php");

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql = "SELECT * FROM tb_pasien WHERE nama_lengkap LIKE '%".$cari."%'";
    $query=mysqli_query($koneksi, $sql);

}else{
    $sql='SELECT * FROM tb_pasien';
    $query = mysqli_query($koneksi, $sql);
}

while($datapasien=mysqli_fetch_array($query)){
    echo "<tr>";
            echo "<td>".$datapasien['id']."</td>";
            echo "<td>".$datapasien['nama_lengkap']."</td>";
            echo "<td>".$datapasien['alamat']."</td>";
            echo "<td>".$datapasien['jk']."</td>";
            echo "<td>".$datapasien['no_telp']."</td>";
            echo "<td>".$datapasien['agama']."</td>";
            echo "<td>".$datapasien['tanggal_masuk']."</td>";
            echo "<td>".$datapasien['gejala']."</td>";
            echo "<td>".$datapasien['tempat_lahir']."</td>";
            echo "<td>".$datapasien['tanggal_lahir']."</td>";
            echo "<td>".$datapasien['no_kamar']."</td>";
            echo "<td>";
            echo "<a href='edit-pasien.php?id=".$datapasien['id']."'>Edit</a> |";
            echo "<a href='hapus-data.php?id=".$datapasien['id']."'>Hapus</a>";
            Echo "</td>";
    echo "</tr>";  
    

    }

    ?>
    </table>
</body>
<a href="tambah.php"><input type="button" name="tambah" value="Tambah"/></a>
    <input type="button" value="Back" onclick="history.back(-1)"/>
    <a href="logout.php">Logout</a>
</html>