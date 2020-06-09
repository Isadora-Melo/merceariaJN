<?php 



function connect() {
    $username = 'root';
    $password = '123';

    $pdo = new PDO('mysql:host=localhost;dbname=merceariajn;charset=utf8', $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

?>