<?php
$message = ""; // Variabel untuk menyimpan pesan informasi
session_start();

 // Koneksi ke database
 $host = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'ult';

 $conn = mysqli_connect($host, $username, $password, $database);
 if (!$conn) {
     die("Koneksi database gagal: " . mysqli_connect_error());
 }

$queryMahasiswa = "SELECT * FROM mahasiswa WHERE id_mahasiswa = $_SESSION[mhs]"; 
$row = mysqli_query($conn,$queryMahasiswa);
$result = mysqli_fetch_assoc($row);

if (isset($_POST['kirim'])) {


    // Mendapatkan nilai input dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $nama_laporan = $_POST['nama-laporan'];
    $jenis_laporan = $_POST['jenis-laporan'];
    $id_mahasiswa = $_POST["id"];
    $status = "Belum Di ACC";

    // Query untuk menyimpan data ke dalam tabel form_pengisian
    $query = "INSERT INTO form_pengisian VALUES (NULL, '$id_mahasiswa', '$nama_laporan', '$jenis_laporan', '$status')";

    if (mysqli_query($conn, $query)) {
        $message = "Data telah berhasil disimpan.";
    } else {
        $message = "Error: " . $query . "<br>" . mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>form Pengisian</title>
    <link rel="stylesheet" href="sform.css">
</head>

<body>
    <div class="navbar">
        <div class="judul">ULT INFORMATIKA</div>
        <div class="header">
            <button class="logout" type="logout">logout</button>
        </div>
    </div>
    <div class="gambar">
        <img class="sampul" src="adminn.jpg" alt="">
    </div>

    <div class="pembagi">
        <div class="bungkus">
            <h2 class="teks">Form Pengisian</h2>
            <?php if (!empty($message)) : ?>
                <div class="pesan"><?php echo $message; ?></div>
            <?php endif; ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="pembungkus">
                    <div class="isidata">
                        <input name="id" type="hidden" value="<?= $result["id_mahasiswa"] ?>">

                        <label for="nama">Nama Lengkap:</label><br>
                        <input readonly value="<?= $result["nama"] ?>" class="nama" type="text" id="nama" name="nama" required><br><br>

                        <label for="nim">NIM:</label><br>
                        <input readonly value="<?= $result["nim"] ?>" class="nim" type="text" id="nim" name="nim" required><br><br>

                        <label for="kelas">Kelas:</label><br>
                        <input class="kelas" type="text" id="kelas" name="kelas" required><br><br>
                    </div>
                    <div class="isidata2">
                        <label for="prodi">Program Studi:</label><br>
                        <input class="prodi" type="text" id="prodi" name="prodi" required><br><br>

                        <label for="nama-laporan">Nama Laporan:</label><br>
                        <input class="laporan" type="text" id="nama-laporan" name="nama-laporan" required><br><br>

                        <label for="jenis-laporan">Jenis Laporan:</label><br>
                        <input class="jenis" type="text" id="jenis-laporan" name="jenis-laporan" required><br><br>

                        <button class="kirim" type="submit" name="kirim">kirim</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <img class="gambardata" src="isidata.png" alt="">
        </div>
    </div>

    <h2 class="penutup">JURUSAN BISNIS DAN INFORMATIKA</h2>
</body>

</html>
