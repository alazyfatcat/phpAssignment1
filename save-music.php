<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Save Input</title>
</head>
<body>

<?php
// save inputs
$song = $_POST['song'];
$album = $_POST['album'];
$awards = $_POST['awards'];
$genres = $_POST['genres'];
$ranking = $_POST['ranking'];

//validate inputs
$ok = true;
if (empty($song)) {
    echo'Name of the song is required<br />';
}
elseif (strlen($song) > 100) {
    echo'Name of the song must be 100 characters or less<br /> ';
    $ok = false;
}

if (empty($album)) {
    echo'Name of the album is required<br />';
}
elseif (strlen($album) > 100) {
    echo'Name of the song must be 100 characters or less<br /> ';
    $ok = false;
}

if( 0 != $_POST['genres'] ) {
    $genres = $_POST['genres'];
}
else {
    echo " Genre is required";
    $ok = false;
}

if (empty($awards)) {
    echo'Name of the award is required<br />';
}
elseif (strlen($awards) > 100) {
    echo'Name of the award must be 100 characters or less<br /> ';
    $ok = false;
}

if (!empty($ranking)){
    if (is_integer($ranking)) {
        echo 'Ranking must be a number 0 or higher<br />';
        $ok = false;
    }
    elseif ($ranking < 0) {
        echo 'Ranking must be a number 0 or higher<br />';
        $ok = false;
    }
}

// connect
$db = new PDO( 'mysql:host=172.31.22.43;dbname=Quoc_Hung200423359',  'Quoc_Hung200423359', 'UZnXmFGtnk');

// SQL INSERT placeholders for inputs
$sql = "INSERT INTO inputs (song, album, genres, awards, ranking) VALUES (:song, :album, :genres, :awards, :ranking)";
$cmd = $db->prepare($sql);

// create a command variable to populate the parameter values
$cmd->bindParam(':song', $song, PDO::PARAM_STR, 100);
$cmd->bindParam(':album', $album, PDO::PARAM_STR, 100);
$cmd->bindParam(':genres', $genres, PDO::PARAM_STR, 45);
$cmd->bindParam(':awards', $awards, PDO::PARAM_STR, 100);
$cmd->bindParam(':ranking', $ranking, PDO::PARAM_INT, 1);

// save
$cmd->execute();

// disconnect
$db = null;
echo'Musics saved';
?>

</body>