<?php
include 'koneksi.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if (isset($_POST['delete_selected'])) {
    if (isset($_POST['select'])) {
        $ids = $_POST['select'];
        if (!empty($ids)) {
            $idList = implode(',', $ids);
            $sql = "DELETE FROM users WHERE id IN ($idList)";
            $conn->query($sql);
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Data berhasil diupdate. Halaman akan di-refresh...</div>";
                echo "<script>setTimeout(function(){ window.location.href = window.location.href; }, 2000);</script>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
        }
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Data berhasil diupdate. Halaman akan di-refresh...</div>";
        echo "<script>setTimeout(function(){ window.location.href = window.location.href; }, 2000);</script>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="halaman-berita/dashboard-berita.php">News</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="container my-3">
        <h1 class="mb-4 border-bottom border-2 mt-3" style="width: fit-content;">Tabel Biodata Mahasiswa</h1>
        <form method="post">
            <div class="d-flex justify-content-between mb-3">
                <a href="kontak.php" class="btn btn-success">Tambah Data</a>
                <button type="submit" name="delete_selected" class="btn btn-danger">Hapus Data Terpilih</button>
            </div>
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped">
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

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>