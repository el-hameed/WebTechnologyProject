<?php
$pdo = new PDO('mysql:host=localhost;port=3309;dbname=project','root','root');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>