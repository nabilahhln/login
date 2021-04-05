<?php

try {
    $dsn ='mysql:host=localhost;dbname=proweb';
    $db = new PDO ($dsn, 'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
?>