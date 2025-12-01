<?php
include 'Koneksi/koneksi.php';

if (isset($_POST['submit'])) {
    $id  = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur   = $_POST['umur'];

    $query = "INSERT INTO student (id, nama, alamat, umur) VALUES ('$id', '$nama', '$alamat', '$umur')";
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
        <h1 class="text-center">Formulir Data Siswa</h1>

       
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" name="id" placeholder="Masukkan ID" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" placeholder="Masukkan Umur" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

</body>

</html>