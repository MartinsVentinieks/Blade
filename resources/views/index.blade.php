<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes</title>
</head>

<body>
    <h1>List of my Notes</h1>
    <?php
$notes = [
    "izpildīt mājasdarbu",
    "Programmēt"
];

echo "<ul>";
foreach ($notes as $note) {
    echo "<li>" . $note . "<li>";
}
echo "</ul>";
?>

</body>
<html>