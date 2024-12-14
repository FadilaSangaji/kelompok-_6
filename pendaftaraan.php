<html>

<head>
    <title>Pendaftaran</title>
    <style>
        hr {
            margin-bottom: 10px;

        }

        table {
            width: 70%;
            border: solid black 2px;
            border-collapse: collapse;
        }

        table th {
            border: solid black 2px;
            color: white;
            padding: 10px 20px;
            background: blue;
        }

        table td {
            border: solid black 2px;
            padding: 10px 60px;
        }

        #btn_tambah {
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
            background: black;
            color: white;
            padding: 8px 10px;
            border-radius: 10px;

        }

        #btn_tambah:hover {
            background: navy;
            color: white;

        }
    </style>
</head>

<body>
    <h1>Data Pendaftaran</h1>
    <hr>
    <a href="index.php?ke=daftar_tambah" id="btn_tambah">Tambah Data</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nik</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>NO DG</th>
            <th>Jenis Kendaraan</th>
            <th>Status</th>
            <th>Input KTP</th>
            <th>Input STNK</th>
            <th>NO antrian</th>
            <th>#
            </th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $hasil = mysqli_query($konek, "SELECT * FROM tbl_wp");
        if (mysqli_num_rows($hasil) == 0) {
            echo "<tr><td colspan='12'>Data Belum Tersedia</td></tr>";
        } else {
            while ($data = mysqli_fetch_array($hasil)) {

                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $data['nma_wp'] . "</td>";
                echo "<td>" . $data['nik_wp'] . "</td>";
                echo "<td>" . $data['jns_kel'] . "</td>";
                echo "<td>" . $data['alamat_wp'] . "</td>";
                echo "<td>" . $data['no_dg'] . "</td>";
                echo "<td>" . $data['jns_kdrn'] . "</td>";
                echo "<td>" . $data['input_ktp'] . "</td>";
                echo "<td>" . $data['input_stnk'] . "</td>";
                echo "<td>" . $data['no_antrian'] . "</td>";
                echo "<td>";
                echo "<a href='index.php?ke=barangedit&id=" . $data['id_wp'] . "' id='btn_tambah'>Ubah</a>";
                echo "<a href='index.php?ke=barangdelete&id=" . $data['id_wp'] . "' id='btn_tambah'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

</body>

</html>