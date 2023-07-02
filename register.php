<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>

</head>
<body>
    <?php
    include "conn.php";
    if(isset($_POST["register"])){

        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        $prodi = $_POST["prodi"];
        $nohp = $_POST["nohp"];

        $sql = "INSERT INTO mahasiswa VALUES (NULL,'$nim','$nama','$jurusan','$prodi','$nohp')";
        $result = mysqli_query($koneksi,$sql);

        if($result){
            echo '<script> alert("Berhasil Register")</script>';
            header("Location: login.php");
        }else{
            echo '<script> alert("Gagal Register")</script>';
        }
    }


    ?>
   <div class="box">
    <div class="container">

        <div class="top">
            <header>Form Register</header>
        </div>
    <form action="" method="post">
    <div class="input-field">
            <input type="text" name="nim" class="input" placeholder="NIM" id="">
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="text" name="nama" class="input" placeholder="Nama Lengkap" id="">
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="text" name="jurusan" class="input" placeholder="Jurusan" id="">
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="text" name="prodi" class="input" placeholder="Prodi" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="text" name="nohp" class="input" placeholder="No Hp" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" name="register" class="submit" value="Register" id="">
        </div>
    </form>
    
    </div>
</div>  
</body>
</html>