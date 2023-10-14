<?php

/*
 * Returns array of subjects from database
 * */

function get_subject_list() {
    global $db;
    $query = $db->query(" SELECT * FROM subjects; ");

    return $query->fetch_all();
}

function get_th_count($subject_name) {
    global $db;
    $query = $db->query("
        SELECT COUNT(them_unit_name) AS \"them_unit_name\"
        FROM them_units T
            JOIN subjects S USING (subject_name)
        WHERE subject_name = '$subject_name';
    ");

    $result = $query->fetch_row();

    return $result[0];
}

function get_th_units() {
    global $db;
    $query = $db->query("
        SELECT * FROM th_units;
    ");
}
