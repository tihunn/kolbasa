<?php include("config/path.php");

isset($_SESSION["username"]) ? $username = $_SESSION['username'] : $username = null;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/main-libs.css">
    <link rel="stylesheet" href="css/nicepage.css">
    <link rel="stylesheet" href="css/mynew.css">
    <link rel="javasc" href="css/mynew.css">
    <script>
        <?php isset($includeJS) ? include($includeJS) : null?>
    </script>
    <?php
        if ($username == "admin") {
            echo '<script src="js/admin.js"></script>';
        }
    ?>
</head>
<body class="u-align-center u-clearfix u-image u-section-2" id="carousel_9189">
<h2 class="u-align-center u-text u-text-1">Наша колбаса трансформирует <u> бизнес </u></h2>

<?php if ($username == "admin") echo '<h5>Теперь вы можете добавлять поля</h5>'; ?>

<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <div class="u-table u-table-responsive u-table-1">

        <?php
        include("components/navbar.php");
        include("components/form.php");
        ?>

    </div>
</div>
</body>
</html>
