<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Portifolio Lucas Amarilla</title>
</head>

<body>
    <?php
    include 'views/navbar.php';
    ?>
    <main class="l-main">
        <?php
        include 'views/main.php';
        include 'views/about.php';
        include 'views/qualification.php';
        include 'views/skills.php';
        include 'views/contact.php';
        ?>
    </main>

    <?php
    include 'views/footer.php';
    ?>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>