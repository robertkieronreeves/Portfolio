<?php

$stmt = $db->prepare (
              "UPDATE  `intro`
                 SET `title` = :title_text, `intro_text` = :intro_text
                 WHERE id => 1;"
);

$stmt->bindParam(':title_text', $_POST["title"]);
$stmt->bindParam(':intro_text', $_POST["intro_text"]);

$stmt->execute();
var_dump($stmt);
?>