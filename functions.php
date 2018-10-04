<?php

/* the function createDB() allows the program to call the database connection
 * from any of the relevant files.
 *
 * @param stream $db establishes a connection to the database
 * new PDO takes three parameters which are strings: the DSN, the host
 * and the username and password.
 * @param->setAttribute sets an attribute on the database handle.
 * @return outputs the database connection.
 */

function createDB() {
    $db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/* The function callRow reduces duplication in the existing.php file by
 * replacing two batches of duplicate text with a function keeping the code drier.
 *
 * @param array $projects_array contains query data that populates the 'id' and 'title' strings
 * @param string $output returns html text which cleans up the appearance of the code in existing.php
 */

    function callRow($projects_array) {
        $output = '<select name="id">';

        foreach ($projects_array as $project) {
            $output .= '<option value="' . $project['id'] . '">' . $project['title'] . '</option>';
        }
        $output .='</select>';
    return $output;

}

?>
