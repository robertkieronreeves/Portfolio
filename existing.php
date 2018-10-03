<?php

require 'functions.php';

$db = createDB();

$stmt = $db->query("SELECT `id`, `title`, `image`, `paragraph` FROM `projects`;");
$projects_array = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit existing project</title>
</head>
<body>
            <form action="upload_projects.php" method="GET">
                Select Project:
                <select name="id">
                    <?php
                    foreach ($projects_array as $project) { ?>
                        <option value="<?php echo $project['id']?>"><?php echo $project['title']; ?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Submit">
            </form>
</body>
</html>