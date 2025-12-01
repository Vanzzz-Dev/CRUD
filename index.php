<?php
include 'Koneksi/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM student");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM student WHERE id = $id");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

        <h1 class="text-center">Data Siswa</h1>

        <a href="from.php" class="btn btn-primary mb-3">Tambah Data</a>

        <table class="table m-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['umur']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Update</a>
                        <a href="index.php?delete=<?= $row['id']; ?>" class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>