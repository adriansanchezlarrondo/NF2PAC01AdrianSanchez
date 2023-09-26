<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h1>Página principal</h1>

    <?php
    $get_var1 = "Real Madrid";
    $get_var2 = "FC Barcelona";
    ?>

    <a href="pag2.php?get1=<?= $get_var1 ?>&get2=<?= $get_var2 ?>">Ir a página secundaria</a>

    <?php
    session_start();

    $_SESSION['session_var1'] = 'Session Variable 1';
    $_SESSION['session_var2'] = 'Session Variable 2';
    $_SESSION['session_var3'] = 'Session Variable 3';
    $_SESSION['session_var4'] = 'Session Variable 4';

    setcookie("ciudad", "madrid", time() + 180); 
    setcookie("deporte", "futbol", time() + 180);
    ?>

    <p>Sessions Variables:</p>
    <ul>
        <li><?= $_SESSION['session_var1'] ?></li>
        <li><?= $_SESSION['session_var2'] ?></li>
    </ul>

    <?php
    $post_var1 = rand(201, 300);
    $post_var2 = rand(301, 400);
    ?>

    <form action="pag2.php" method="POST">
        <input type="hidden" name="post_var1" value="<?= $post_var1 ?>">
        <input type="hidden" name="post_var2" value="<?= $post_var2 ?>">
        <input type="submit" value="Submit POST Variables">
    </form>

    <p>Cookies:</p>
    <ul>
        <li><?php echo isset($_COOKIE['ciudad']) ? $_COOKIE['ciudad'] : 'ciudad no establecida'; ?></li>
        <li><?php echo isset($_COOKIE['deporte']) ? $_COOKIE['deporte'] : 'deporte no establecido'; ?></li>
    </ul>

    <?php
    $url_encoded_string = urlencode("Esto es un ejemplo de url encoded");
    ?>
    <p>URLencoded: <?= $url_encoded_string ?></p>

    <p>Dia de hoy: <?= date('d-m-Y') ?></p>
</body>
</html>