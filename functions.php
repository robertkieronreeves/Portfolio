<?php

/* creates a database connection.
 */

function createDB() {
    $db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/* creates a html select dropdown.
 *
 * @param $projects_array array projects from the database
 *
 * @return string the html string for the select dropdown.
 */

    function callRow(array $projects_array) {
        $output = '<select name="id">';

        foreach ($projects_array as $project) {
            if (!empty($project['id']) && !empty($project['title'])) {
                $output .= '<option value="' . $project['id'] . '">' . $project['title'] . '</option>';
            } else {
                return FALSE;
            }
        }
        $output .='</select>';
    return $output;
}

?>
