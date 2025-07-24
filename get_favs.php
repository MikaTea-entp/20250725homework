<?php
// XSSサニタイズ
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

header('Content-Type: application/json');
$pdo = new PDO('mysql:host=localhost;dbname=scamper;charset=utf8mb4',
    'root', // ← DBユーザー名
    ' '  // ← DBパスワード
);
$stmt = $pdo->query("SELECT id, title, content, created_at FROM favs ORDER BY created_at DESC");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
