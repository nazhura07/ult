<?php
// Pengecekan saat formulir kelas dikirimkan
if(isset($_POST['kelas'])) {
    $kelas = $_POST['kelas'];
    echo "Anda memilih kelas: $kelas";
}

// Pengecekan saat formulir dokumen dikirimkan
if(isset($_POST['dokumen'])) {
    $dokumen = $_POST['dokumen'];
    echo "Anda menambahkan dokumen: $dokumen";
    header("Location: form.php"); // Ubah "halaman_lain.php" dengan URL halaman tujuanskelas.css
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>pilihkelas</title>
    <link rel="stylesheet" href="pilkelas.css">
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

    <div class="gabung">
        <div class="gambar2">
            <div class="ta">Laporan Tugas Akhir</div>
            <img class="foto" src="kelas.png" alt="">
        </div>
        <div class="pilih">
            <div class="text">Cek Data Kelas</div>
            <div class="kelas">
                <form method="POST" action="datauser.php">
                    <button class="pp">
                        <div>Teknologi Rekayasa Perangkat Lunak</div>
                    </button>
                </form>
            </div>
            <div class="kelas">
                <form method="POST" action="datauser.php">
                    <button class="pp">
                        <div>Teknologi Rekayasa Komputer</div>
                    </button>
                </form>
            </div>
            <div class="kelas">
                <form method="POST" action="datauser.php">
                    <button class="pp">
                        <div>Bisnis Digital</div>
                    </button>
                </form>
            </div>
            <div class="tambah">
                <form method="POST" action="form.php"> <!-- Ubah "halaman_lain.php" dengan URL halaman tujuan -->
                <button class="ppp">
                        <div>Tambah Dokumen</div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <h2 class="penutup">jurusan BISNIS DAN INFORMATIKA</h2>

</body>

</html>