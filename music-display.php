<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musics Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"
</head>
<body>

<?php
// connect
$db = new PDO('mysql:host=172.31.22.43;dbname=Quoc_Hung200423359', 'Quoc_Hung200423359', 'UZnXmFGtnk');

// set up & execute query
$sql = "SELECT * FROM inputs";
$cmd = $db->prepare($sql);
$cmd->execute();
$inputs = $cmd->fetchAll();

// start table
echo '<table class="table table-striped table-hover table-dark"><thead><th>Song</th><th>Album</th><th>Genres</th><th>Awards</th><th>Ranking</th></thead>';

// loop through data and display the results
foreach ($inputs as $value) {
    echo '<tr><td>' . $value['song'] . '</td>
        <td>' . $value['album'] . '</td>
        <td>' . $value['genres'] . '</td>
        <td>' . $value['awards'] . '</td>
        <td>' . $value['ranking'] . '</td></tr>';
}


echo '</table>';
?>

</body>
</html>