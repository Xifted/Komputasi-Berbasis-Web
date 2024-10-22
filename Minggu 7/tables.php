<?php
include 'koneksi.php';

if (isset($_POST['delete_selected'])) {
    if (isset($_POST['select'])) {
        $ids = $_POST['select'];

        if (!empty($ids)) {
            $idList = implode(',', $ids);
            $sql = "DELETE FROM users WHERE id IN ($idList)";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Data berhasil dihapus.</div>";
            } else {

                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>Tidak ada data yang dipilih.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Select field is missing in POST.</div>";
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Data berhasil dihapus.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tabel Biodata Mahasiswa</title>
</head>

<body>
    <header class="bg-light position-sticky w-100 shadow py-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Muhammad Rafi Irfan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav d-flex gap-3">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="halaman-berita/dashboard-berita.php">News</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container my-3">
        <a href="kontak.php" class="link-dark link-underline link-underline-opacity-0 p-0 fs-4">
            <i class="bi bi-arrow-left px-1 pe-2 rounded-end fs-4">Back to Kontak</i>
        </a>
        <h1 class="mb-4 border-bottom border-2 mt-3" style="width: fit-content;">Tabel Biodata Mahasiswa</h1>
        <form method="post">
            <div class="d-flex justify-content-between mb-3">
                <a href="kontak.php" class="btn btn-success">Tambah Data</a>
                <button type="submit" name="delete_selected" class="btn btn-danger">Hapus Data Terpilih</button>
            </div>
            <div class="table-responsive">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Hobi</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><input type="checkbox" name="select[]" value="<?= $row['id'] ?>"></td>
                                    <td><a href="view.php?id=<?= $row['id'] ?>"><?= $row['id'] ?></a></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['hobbies'] ?></td>
                                    <td><?= $row['gender'] == "male" ? "Laki-Laki" : "Perempuan" ?></td>
                                    <td><?= $row['birthDate'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <form method="post" style="display:inline-block;">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <button type="submit" name="delete" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada data ditemukan</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </section>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>