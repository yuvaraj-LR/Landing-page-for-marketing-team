<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kothur || Home</title>

    <!-- Favicon Link -->
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAD/hAAA9fX1AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEREREREREREREREREREREREREAEQAREREREQARABERERERABEAEREREREAEAEREREREQAAERERERERAAEREREREREAAREREREREQAAERERERERABABEREREREAEQAREREREQAREAERERERABEREREREREREREREREREREREREREAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"
        rel="icon" type="image/x-icon" />

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
<!-- Navbar -->
    <?php include "navbar.php"?>

    <br> <br>
    <!-- carousel -->
    <div style="background-color: black; height: 100vh; width: 100%;">
    <div class="row">
        <div class="container col-md-4">
        <?php
            include "db.php";

            // Fetch data from database
            $sql = "SELECT * FROM notifications";
            $result = $conn->query($sql);

            // Display data in Bootstrap carousel
            if ($result->num_rows > 0) {
                echo '<div id="course-carousel" class="carousel container slide" data-bs-ride="carousel">';
                echo '<div class="carousel-inner d-block w-100 notification">';
                $active = true;
                while($row = $result->fetch_assoc()) {
                    $class = $active ? ' active' : '';
                    echo '<div class="carousel-item' . $class . '">';
                    echo '<h1>' . $row["heading"] . '</h1>';
                    echo '<p class="text-center">' . $row["content"] . '</p>';
                    echo '</div>';
                    $active = false;
                }
                echo '</div>';
                echo '<button class="carousel-control-prev" type="button" data-bs-target="#course-carousel" data-bs-slide="prev">';
                echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Previous</span>';
                echo '</button>';
                echo '<button class="carousel-control-next" type="button" data-bs-target="#course-carousel" data-bs-slide="next">';
                echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Next</span>';
                echo '</button>';
                echo '</div>';
            } else {
                echo "No courses found.";
            }

            $conn->close();
        ?>
        </div>
    </div>
    </div>

</body>

</html>