<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PHP Project</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand bg-dark navbar-dark">
    <div class="container">
        <a href="web.php?page=home" class="navbar-brand">PHP Simple Project</a>
        <ul class="navbar-nav">
            <li><a href="web.php?page=home" class="nav-link">Home</a></li>
            <li><a href="web.php?page=about" class="nav-link">About</a></li>
            <li><a href="web.php?page=blog" class="nav-link">Blog</a></li>

            <?php if (isset($_SESSION['id'])) { ?>
                <li><a href="web.php?page=contact" class="nav-link">Contact</a></li>
                <li><a href="web.php?page=calculator" class="nav-link">Calculator</a></li>
                <li><a href="web.php?page=series" class="nav-link">Series</a></li>
                <li><a href="web.php?page=logout" class="nav-link">Logout</a></li>
            <?php } else { ?>
                <li><a href="web.php?page=login" class="nav-link">Login</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>