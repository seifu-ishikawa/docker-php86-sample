<?php
$dsn = 'mysql:host=db;dbname=app_db;charset=utf8mb4';
try {
    $pdo = new PDO($dsn, 'app_user', 'Upw1!');
    echo "<h1>PHP + Apache + MariaDB 接続成功！</h1>";
} catch (PDOException $e) {
    echo "接続エラー: " . $e->getMessage();
}
