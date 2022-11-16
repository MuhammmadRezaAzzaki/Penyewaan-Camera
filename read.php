<?php
include_once('koneksi.php');
$hasil = mysqli_query($mysqli, "SELECT * FROM tb_camera WHERE id");

$angka = 0;

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Penyewaan Camera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Penyewaan Camera</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">No.Telp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Camera</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($res = mysqli_fetch_array($hasil)) {
                $angka++;
                echo '<tr>';
                echo '<td>' . $angka . '</td>';
                echo '<td>' . $res['nama'] . '</td>';
                echo '<td>' . $res['nik'] . '</td>';
                echo '<td>' . $res['no_telp'] . '</td>';
                echo '<td>' . $res['alamat'] . '</td>';
                echo '<td>' . $res['jenis_camera'] . '</td>';
                echo '<td><a href="edit.php?id=
                    ' . $res['id'] . '    
                    ">✏edit</a> | 
                    <a href="delete.php?id=
                    ' . $res['id'] . '
                    ">🗑 Delete</a>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <a href="create.php"><button class="btn btn-primary position-absolute top-50 start-50 translate-middle">Tambah</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>