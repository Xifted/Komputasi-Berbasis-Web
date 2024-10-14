<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontak.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="halaman-berita/dashboard-berita.php">News</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container mt-5">
        <h1 class="border-bottom border-2" style="width: max-content;">Confirmation</h1>

        <?php
        $name = htmlspecialchars($_POST['fName']);
        $email = htmlspecialchars($_POST['email']);
        $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
        $gender = htmlspecialchars($_POST['gender'] == "male" ? "Laki - Laki" : "Perempuan");
        $birthDate = htmlspecialchars($_POST['fBirth']);

        echo "<p><strong>Nama:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        if (!empty($hobbies)) {
            echo "<p><strong>Hobby:</strong> " . implode(", ", array_map('ucwords', $hobbies)) . "</p>";
        } else {
            echo "<p><strong>Hobby:</strong> None</p>";
        }
        echo ucfirst("<p><strong>Jenis Kelamin:</strong> $gender</p>");
        echo "<p><strong>Tanggal Lahir:</strong> " . $birthDate . "</p>";
        ?>

        <a href="kontak.php" class="btn btn-primary mt-4">Confirm</a>
    </section>
</body>

</html>