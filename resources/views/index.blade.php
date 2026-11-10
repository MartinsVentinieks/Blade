<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes</title>
</head>

<body>
    <h1>List of my Notes</h1>
    <?php
echo "<ul>";
foreach ($notes as $note) {
    echo "<li>" . $note['content'] . "</li>";
}
echo "</ul>";
    ?>

</body>
<html>