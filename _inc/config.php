<?php

// Config variables
$config = ([
    'db' => [
        "name" => "vocabulary_trainer",
        "host" => "localhost",
        "port" => "3306",
        "username" => "root",
        "password" => ""
    ]
]);

// Database connection
$db = mysqli_connect( $config['db']['host'], $config['db']['username'],
    $config['db']['password'], $config['db']['name'], $config['db']['port'] );



require_once 'functions.php';