<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
 
        <form method="POST" action="index.php">
            <label for="str">Votre phrase</label>
            <input type="text" id="str" name="str" placeholder="Chiffre.">
            <button type="submit">Envoyer</button>
        </form>
    </body>
</html>
 
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $str = $_POST['str'];
}

$length = strlen($str);
$reversed_str = '';    
  
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed_str .= $str[$i];
}

echo $reversed_str;
?>