<?php
    require_once "functions.php";

    $action = $_POST["action"];
    $subject = $_POST["subject"];

    switch ($action) {
        case "get_th_units":
            die(json_encode(get_th_units($subject)));
    }
