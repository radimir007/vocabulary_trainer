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
</head>
<body>

    <?php foreach (get_words($unit_id) as $term): ?>

    <?php endforeach; ?>

</body>
</html>
