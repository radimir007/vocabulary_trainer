<?php


/*
 * Returns array of subjects from database
 * */

function get_subject_list() {
    global $db;
    $query = $db->query(" SELECT * FROM subjects; ");

    return $query->fetch_all();
}
