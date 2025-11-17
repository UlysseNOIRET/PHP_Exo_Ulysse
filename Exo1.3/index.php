<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double boucle nombre</title>
</head>
<body>

    <h1>Choisissez un nombre</h1>
    <form method="post">
        <label for="age">Nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    function boucle($nombre) {
    
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = intval($_POST["age"]);
        $resultat = boucle($nombre);
        echo "<h2><strong>$resultat</strong></h2>";
    }
    ?>
</body>
</html>