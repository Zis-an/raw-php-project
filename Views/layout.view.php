<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: <?= $view_bag['title']; ?></title>
    <!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="../assets/css/php-fundamentals.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">PHP Fundamentals: 
                <?=  $view_bag['title']; ?>
            </a>
        </div>
    </nav>

    <?php require("$name.view.php"); ?>

</body>
</html>