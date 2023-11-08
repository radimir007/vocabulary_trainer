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
            if (isset($_POST["unit_id"])) {
                $unit = $_POST["unit_id"];
                $result = get_words($unit);
                die(json_encode($result, TRUE));
            }
            die("Something went wrong!");

    }

