<?php require_once "config.php";

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
        SELECT COUNT(t.them_unit_name) AS \"them_unit_name\"
        FROM them_units t
            JOIN subjects s USING (subject_name)
        WHERE subject_name = '$subject_name';
    ");

    $result = $query->fetch_row();

    return $result[0];
}

function get_th_units($subject) {
    global $db;
    $query = $db->query(" 
        SELECT them_unit_id, them_unit_name, COUNT(term_id) as \"term_count\"
        FROM them_units th
            LEFT OUTER JOIN terms t USING (them_unit_id)
        WHERE subject_name = '$subject'
        GROUP BY them_unit_name
        ORDER BY them_unit_id;
    ");

    $results = $query->fetch_all();
    return $results;
}
