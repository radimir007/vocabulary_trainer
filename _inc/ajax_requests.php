<?php
    $data = $_POST["action"];

    switch ($data) {
        case "get_th_units":
            get_th_units();
            break;
    }
