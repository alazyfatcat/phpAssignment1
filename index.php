<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Music Tracker</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<h1>Music Tracker</h1>
<form method="post" action="save-music.php">
    <fieldset>
        <label for="song" class="col-md-2">Song: </label>
        <input name="song" id="song" required maxlength="200" />
    </fieldset>
    <fieldset>
        <label for="album" class="col-md-2">Album: </label>
        <input name="album" id="album" required maxlength="200" />
    </fieldset>      
    <fieldset>
        <label for="awards" class="col-md-2">Awards: </label>
        <input name="awards" id="awards"  required />
    </fieldset>
    <fieldset>
        <label for="artist" class="col-md-2">Artist: </label>
        <input name="artist" id="artist" required />
    </fieldset>
    <fieldset>
        <label name="ranking" class="col-md-2">Ranking: </label>
        <input name="ranking" id="ranking" type="number" required />
    </fieldset>
    <fieldset>
        <label name ="genres" class="col-md-2" required>Genres: </label>
        <?php
        // connect
        $db = new PDO( 'mysql:host=172.31.22.43;dbname=Quoc_Hung200423359',  'Quoc_Hung200423359', 'UZnXmFGtnk');

        $sql = "SELECT genres From dropdownlist";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        $dropdown = $cmd->fetchAll();

        //create  html list
        echo '<select name = "genres" required>';
        //echo '<option>' . 'Select Genres' . '</option>';
        //drop down
        foreach($dropdown as $value) {
            echo '<option value = "' . $value ['genres'] . '">' . $value ['genres'] . '</option>';}
        echo '</select>';
        ?>

    </fieldset>
    <button class="offset-md-2 btn btn-success">Find</button>

</form>
</body>
</html>