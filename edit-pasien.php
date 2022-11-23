<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:pasien.php?");
}
    $kode=$_GET['id'];
    $sql="SELECT * FROM tb_pasien where id=$kode";
    $query= mysqli_query($koneksi,$sql);
    $datapasien= mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die ("Data tidak ditemukan");
    }

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Edit Data Pasien </h1>
        <form action="proses-edit.php" method="POST">
            <fieldset> 
                <input type="hidden" name="id" value="<?php echo $datapasien['id']?>" />
                <p>
                    <label for="nama_lengkap">Nama Lengkap :</label>
                    <input type="text" name="nama_lengkap" />
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" row="7"> </textarea> 
                </p>
                <p>
                    <label for="jk">Jenis kelamin :</label>
                    <label><input type="radio" name="jk" value="Laki-laki"/>Laki-laki </label>
                    <label><input type="radio" name="jk" value="Perempuan"/>Perempuan </label>
                </P>
                <p>
                    <label for="no_telp">No. Telepon :</label>
                    <input type="number" name="no_telp" />
                </P>
                <p>
                    <label for="agama">Agama :</label>
                    <select name="agama" >
                    <option value="islam">Islam </option>
                    <option value="kristen">Kristen </option>
                    <option value="hindu">Hindu </option>
                    <option value="buddha">Buddha </option>
                    <option value="katolik">Katolik </option>
                    <option value="konghucu">Konghucu </option>
                    </select> 
                </P>
                <p>
                    <label for="tanggal_masuk">Tanggal Masuk :</label>
                    <input type="date" name="tanggal_masuk"/>
                </P>
                <p>
                    <label for="gejala">Gejala :</label>
                    <input type="text" name="gejala"/>
                </P>
                <p>
                    <label for="tempat_lahir">Tempat lahir :</label>
                    <input type="text" name="tempat_lahir"/>
                </P>
                <p>
                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir" />
                </P>
                <p>
                    <label for="no_kamar">No. Kamar :</label>
                    <input type="number" name="no_kamar" />
                </P>
                <p>
                    <input type="submit"  value="Simpan" name="tambah" />
                </p>
            </fieldset>
        </form>
</body>
</html>
