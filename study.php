<?php require_once "_inc/config.php";
    if (!isset($_POST["th_unit"])) {
        die("Something went wrong :(");
    }

    $unit_id = substr($_POST["th_unit"], 3);

    global $db;
?>

<!DOCTYPE html>
<html lang="sk-SK">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_th_unit_name($unit_id)[0] ?></title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/study.css">
</head>
<body>

    <?php include_once "_partials/header.php"?>

    <main>
        <ul>
            <?php foreach (get_words($unit_id) as $term): ?>
                <li>
                    <span><?= $term[0] ?></span>
                    <span><?= $term[1] ?></span>
                </li>


            <?php endforeach; ?>
        </ul>
    </main>


</body>
</html>
