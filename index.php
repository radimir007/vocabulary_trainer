<?php require_once "_inc/config.php" ?>

<!DOCTYPE html>
<html lang="sk-SK" xmlns:script="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vocabulary trainer</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
    <?php include_once "_partials/header.php"?>
    <main>
        <h1>Subjects</h1>
        <section class="subject-list">
            <?php foreach (get_subject_list() as $subject): ?>

                <article>
                    <img src="assets/img/<?= $subject[1] ?>" alt="">
                    <div class="subject-description">
                        <h2><?= $subject[0] ?></h2>
                        <small><?= get_th_count($subject[0]) ?> thematic units</small>
                    </div>
                </article>

            <?php endforeach; ?>

        </section>

        <section class="th-units">
            <h2>Thematic units</h2>
            <ul>

            </ul>
        </section>

    </main>

    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/app.js"></script>
</body>
</html>
