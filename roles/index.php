<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role List</title>
</head>

<body>
    <h1>Role List</h1>
    <?php
    include("mysql.php");
    $db = connect();

    $result = $db->query("SELECT * FROM roles");
    ?>
    <ul>
        <?php while ($row = $result->fetch()) : ?>
            <li>
                <?= htmlspecialchars($row->name) ?>
                (<?= $row->value ?>)
            </li>
        <?php endwhile ?>
    </ul>

    <a href="new.php">New Role</a>
</body>

</html>