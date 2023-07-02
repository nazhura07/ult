<!DOCTYPE html>
<html>

<head>
    <title>data laporan user</title>
    <link rel="stylesheet" href="sdatauser.css">
</head>

<body>
    <div class="navbar">

        <div class="judul">ULT INFORMATIKA</div>
        <div class="header">
            <a href="logout.php" class="logout" type="logout">logout</a> 
        </div>
    </div>
    <div class="gambar">
        <img class="sampul" src="adminn.jpg" alt="">
    </div>
</body>

<form class="cari" action="" method="get">
  <input type="text" name="query" placeholder="Cari..." />
  <button type="submit">Cari</button>
</form>

<body>
  
<body>
  <h2>Data pengumpulan Tugas Akhir</h2>
  <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Prodi</th>
            <th>Nama Laporan</th>
            <th>Jenis Laporan</th>
            <th>Status</th>
        </tr>
        <?php
        session_start();
        include "conn.php";
        // Mengambil data dari database dan menampilkannya dalam loop
        $dataMahasiswa = [];
        $query = "SELECT * FROM form_pengisian INNER JOIN mahasiswa ON form_pengisian.id_mahasiswa = mahasiswa.id_mahasiswa WHERE form_pengisian.id_mahasiswa = $_SESSION[mhs]";
        $row = mysqli_query($koneksi , $query);
        
        while($result = mysqli_fetch_assoc($row)){
            $dataMahasiswa[] = $result;
        }

        foreach ($dataMahasiswa as $mahasiswa) {
            echo "<tr>";
            echo "<td>" . $mahasiswa['nama'] . "</td>";
            echo "<td>" . $mahasiswa['nim'] . "</td>";
            echo "<td>" . $mahasiswa['jurusan'] . "</td>";
            echo "<td>" . $mahasiswa['prodi'] . "</td>";
            echo "<td>" . $mahasiswa['nama_laporan'] . "</td>";
            echo "<td>" . $mahasiswa['jenis_laporan'] . "</td>";
            echo "<td>" . $mahasiswa['status'] . "</td>";
        }
        ?>
    </table>
</body>
<body>
    <h2 class="penutup"> JURUSAN BISNIS DAN INFORMATIKA</h2>
</body>
</html>