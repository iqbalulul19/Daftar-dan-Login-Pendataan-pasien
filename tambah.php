<html>
    <head>
    
    </head>
    <body>
     <center>
        <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
        <h3>Form Pendaftaran Pasien Baru</h3>
        <form action="proses-pendaftaran.php" method="POST">
        <form>
            <fieldset>
                        <p>
                            <label for="nama_lengkap">Nama Lengkap :</label>
                            <input type="text" name="nama_lengkap" />
                        </p>
                        <p>
                             <label for="alamat">Alamat :</label>
                             <textarea name="alamat" row="S"></textarea>
                        </p>
                        <p>
                             <label for="jk">Jenis kelamin :</label>
                             <input type="radio" name="jk" value="Laki-laki"/>Laki-laki
                             <input type="radio" name="jk" value="Perempuan"/>Perempuan
                        </P>
                        <p>
                             <label for="no_telp">No. Telepon :</label>
                             <input type="number" name="no_telp" />
                        </P>
                        <p>
                             <label for="agama">Agama :</label>
                             <select name="agama">
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
                             <input type="date" name="tanggal_masuk" />
                        </P>
                        <p>
                             <label for="gejala">Gejala :</label>
                             <input type="text" name="gejala" />
                        </P>
                        <p>
                             <label for="tempat_lahir">Tempat lahir :</label>
                             <input type="text" name="tempat_lahir" />
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
                             <input type="submit" value="Tambah Pasien" name="tambah" />
                             <input type="button" value="Back" onclick="history.back(-1)"/>
                        </p>

                
</fieldset>
</form>
</body>
</html>