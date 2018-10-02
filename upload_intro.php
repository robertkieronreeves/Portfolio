<?php

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmt = $db->prepare (
              "UPDATE  `intro`
                 SET `title` = :title_text, `intro_text` = :intro_text
                 WHERE id = 1;"
);

$stmt->bindParam(':title_text', $_POST["title_text"]);
$stmt->bindParam(':intro_text', $_POST["intro_text"]);

$stmt->execute();
var_dump($_POST);
?>