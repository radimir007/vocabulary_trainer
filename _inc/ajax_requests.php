<?php
    require_once "functions.php";

    $action = $_POST["action"];

    switch ($action) {
        case "get_th_units":
            if (isset($_POST["action"])) {
                $subject = $_POST["subject"];
                die(json_encode(get_th_units($subject)));
            }
            die("Something went wrong!");

        case "get_terms":
            if (isset($_POST["unit"])) {
                $unit = $_POST["unit"];
            }
            die("Something went wrong!");

    }
