<?php

require 'functions.php';

$db = createDB();

$stmt = $db->prepare(
    "DELETE FROM `projects`
      WHERE `id` = :id;"
);
$stmt->bindParam(':id',    $_GET["id"]);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
Project successfully deleted!
<a class="nav-text" href="existing.php"><br>Back to projects</a>
</body>
</html>
