<?php
include_once('koneksi.php');
//update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $jenis_camera = $_POST['jenis_camera'];

    $result = mysqli_query($mysqli, "UPDATE tb_camera SET nama='$nama', nik='$nik', no_telp='$no_telp', alamat='$alamat', jenis_camera='$jenis_camera' WHERE id=$id");
    header('location: read.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penyewaan Camera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM tb_camera WHERE id=$id ");

while ($res = mysqli_fetch_array($result)) {
    $id = $res['id'];
    $nama = $res['nama'];
    $nik = $res['nik'];
    $no_telp = $res['no_telp'];
    $alamat = $res['alamat'];
    $jenis_camera = $res['jenis_camera'];
}
?>

<body class="container mx-5">
    <h1>Penyewaan Camera</h1>
    <form method="POST" name="form" action="edit.php">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama" id="nama" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NIK</label>
            <input type="number" class="form-control" value="<?php echo $nik; ?>" name="nik" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No.Telp</label>
            <input type="text" class="form-control" value="<?php echo $no_telp; ?>" name="no_telp" id="no_telp" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" id="alamat" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="jenis_camera" class="form-label">Jenis Camera</label>
            <input type="text" class="form-control" name="jenis_camera" value="<?php echo $jenis_camera; ?>" id="jenis_camera" aria-describedby="emailHelp">
        </div>

        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <?php echo $_GET['id']; ?>
        <button type="submit" name="update" value="update" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>