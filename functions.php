<?php

function createDB() {
    $db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

    function callRow($projects_array) {
        $output = '<select name="id">';

        foreach ($projects_array as $project) {
            $output .= '<option value="' . $project['id'] . '">' . $project['title'] . '</option>';
        }
        $output .='</select>';
    return $output;

}

?>
