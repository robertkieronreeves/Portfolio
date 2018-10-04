<?php

function createDB() {
    $db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

//function validateNewProject() {
//
//    if (empty($_POST['project_title']) || empty($_POST['image']) || empty($_POST['intro_text'])) {
//        echo 'Please fill out all fields';
//    } else {
//
//        $stmt = $db->prepare(
//            "UPDATE `projects`
//                 SET `title` = :title, `image` = :image, `paragraph` = :paragraph
//                 WHERE id = 1;"
//        );
//
//        $stmt->bindParam('title', $_POST["project_title"]);
//        $stmt->bindParam(':image', $_POST["image"]);
//        $stmt->bindParam(':paragraph', $_POST["intro_text"]);
//
//        $stmt->execute();
//
//    }
//}

?>
