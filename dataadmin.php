<!DOCTYPE html>
<html>

<head>
    <title>admin cek data</title>
    <link rel="stylesheet" href="sdataadmin.css">
</head>

<body>
    <div class="navbar">
        <div class="judul">ULT asdadsa</div>
        <div class="header">
            <a href="logout.php" class="logout" type="logout">logout</a>
        </div>
    </div>
    <div class="gambar">
        <img class="sampul" src="adminn.jpg" alt="">
    </div>

    <form class="cari" action="" method="get">
        <input type="text" name="query" placeholder="Cari..." />
        <button type="submit">Cari</button>
    </form>

    <h2>Data laporan </h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Prodi</th>
            <th>Nama Laporan</th>
            <th>Jenis Laporan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "conn.php";
        // Mengambil data dari database dan menampilkannya dalam loop
        $dataMahasiswa = [];

        $query = "SELECT * FROM form_pengisian INNER JOIN mahasiswa ON form_pengisian.id_mahasiswa = mahasiswa.id_mahasiswa";
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
            echo "<td><a href='acc.php?id_laporan=$mahasiswa[id_laporan]'>ACC</a></td>"; 
        }
        ?>
    </table>

    <h2 class="penutup"> JURUSAN BISNIS DAN INFORMATIKA</h2>
</body>

</html>
