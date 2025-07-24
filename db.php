<?php
$dsn = 'mysql:host=mysql3109.db.sakura.ne.jp;dbname=mikatea_scamper_novelist;charset=utf8mb4';
$user = 'mikatea_scamper_novelist';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage();
    exit;
}
?>