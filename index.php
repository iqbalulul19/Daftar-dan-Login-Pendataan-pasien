<!DOCTYPE html>
<html>
<head>
    <title>Membuat Login</title>
</head>
<body>
    <center>
    <h2>LOGIN</h2>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakes halaman admin";
        }
    }
    ?>
    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
    <br/>
    <br/>
    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="masukkan password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN">
                <a href="daftar.php"><input type="button" name="daftar" value="DAFTAR">
            </tr>
</table>
<div style="max-width: 600px; margin: 3em auto"> 
        <table border="1" width="100%">
</table>
</form>
</body>
</html>