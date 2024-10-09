<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="container mt-5">
        <h1 class="border-bottom border-2" style="width: max-content;">Confirmation</h1>

        <?php
            $name = htmlspecialchars($_POST['fName']);
            $email = htmlspecialchars($_POST['email']);
            $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
            $gender = htmlspecialchars($_POST['gender']);

            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            if (!empty($hobbies)) {
                echo "<p><strong>Hobbies:</strong> " . implode(", ", $hobbies) . "</p>";
            } else {
                echo "<p><strong>Hobbies:</strong> None</p>";
            }
            echo "<p><strong>Gender:</strong> $gender</p>";
        ?>

        <a href="contact.php" class="btn btn-primary mt-4">Confirm</a>
    </section>
</body>
</html>
