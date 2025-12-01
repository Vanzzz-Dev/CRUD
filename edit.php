<?php

include 'Koneksi/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM student WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    $query = "UPDATE student SET 
                nama='$nama',
                alamat='$alamat',
                umur='$umur'
              WHERE id='$id'";

    mysqli_query($conn, $query);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center">Update Data Siswa</h1>


        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" name="id" value="<?= $row['id']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" required><?= $row['alamat']; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" value="<?= $row['umur']; ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-primary">Update</button>

        </form>
    </div>

</body>

</html>