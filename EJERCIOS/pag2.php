<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Secundaria</title>
</head>
<body>
    <h1>Página secundaria</h1>
    
    <a href="pag1.php">Volver a la página principal</a>
    <?php
    $get_var1 = $_GET['get1'] ?? 'get1 no establecido';
    $get_var2 = $_GET['get2'] ?? 'get2 no establecido';
    ?>

    <p>GET Variables:</p>
    <ul>
        <li>Variable GET 1: <?= $get_var1 ?></li>
        <li>Variable GET 2: <?= $get_var2 ?></li>
    </ul>

    <?php
    $post_var1 = $_POST['post_var1'] ?? 'Post Var1 not set';
    $post_var2 = $_POST['post_var2'] ?? 'Post Var2 not set';
    ?>

    <p>POST Variables:</p>
    <ul>
        <li>Post Var1: <?= $post_var1 ?></li>
        <li>Post Var2: <?= $post_var2 ?></li>
    </ul>

    <p>Session Variables:</p>
    <ul>
        <li><?= $_SESSION['session_var3'] ?></li>
        <li><?= $_SESSION['session_var4'] ?></li>
    </ul>

    <p>Cookies:</p>
    <ul>
        <li><?php echo isset($_COOKIE['ciudad']) ? $_COOKIE['ciudad'] : 'ciudad no establecida'; ?></li>
        <li><?php echo isset($_COOKIE['deporte']) ? $_COOKIE['deporte'] : 'deporte no establecido'; ?></li>
    </ul>
</body>
</html>

