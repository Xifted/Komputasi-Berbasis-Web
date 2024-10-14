<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact Us</title>
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

    <section class="container my-5">
        <h1 class="border-bottom border-2" style="width: max-content;">Contact Us</h1>

        <form class="mt-4" action="confirmation.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="fName" placeholder="Masukkan Nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Hobby</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="membaca" id="hobbyReading" name="hobby[]">
                    <label class="form-check-label" for="hobbyReading">Membaca</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="menyanyi" id="hobbySinging" name="hobby[]">
                    <label class="form-check-label" for="hobbySinging">Menyanyi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="lari" id="hobbyRunning" name="hobby[]">
                    <label class="form-check-label" for="hobbyRunning">Lari</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" required>
                    <label class="form-check-label" for="genderMale">Laki - Laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" required>
                    <label class="form-check-label" for="genderFemale">Perempuan</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birthDate" name="fBirth" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="m-0">&copy; 2024 Muhammad Rafi Irfan. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
