<?php
try {
    $dbh = new PDO("mysql:host=localhost;dbname=jo;charset=utf8","root","");
} catch (PDOException $e) {
    die ($e->getMessage());
}
?>