<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No records found";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['fName'];
    $email = $_POST['email'];
    $hobbies = implode(', ', $_POST['hobby']);
    $gender = $_POST['gender'];
    $birthDate = $_POST['fBirth'];

    $updateSql = "UPDATE users SET name='$name', email='$email', hobbies='$hobbies', gender='$gender', birthDate='$birthDate' WHERE id=$id";

    if ($conn->query($updateSql) === TRUE) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Edit Biodata</title>
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
        <a href="tables.php" class="link-dark link-underline link-underline-opacity-0 p-0 fs-4">
            <i class="bi bi-arrow-left px-1 pe-2 rounded-end fs-4">Back to Table</i>
        </a>
        <h1 class="border-bottom border-2 mt-3" style="width: max-content;">Edit Biodata</h1>
        <form class="mt-4" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="fName" value="<?= $row['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $row['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Hobby</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="membaca" id="hobbyReading" name="hobby[]" <?= in_array('membaca', explode(', ', $row['hobbies'])) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hobbyReading">Membaca</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="menyanyi" id="hobbySinging" name="hobby[]" <?= in_array('menyanyi', explode(', ', $row['hobbies'])) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hobbySinging">Menyanyi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="lari" id="hobbyRunning" name="hobby[]" <?= in_array('lari', explode(', ', $row['hobbies'])) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hobbyRunning">Lari</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" <?= $row['gender'] == 'male' ? 'checked' : '' ?> required>
                    <label class="form-check-label" for="genderMale">Laki - Laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" <?= $row['gender'] == 'female' ? 'checked' : '' ?> required>
                    <label class="form-check-label" for="genderFemale">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birthDate" name="fBirth" value="<?= $row['birthDate'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="m-0">&copy; 2024 Muhammad Rafi Irfan. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>