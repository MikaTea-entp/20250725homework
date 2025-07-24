<?php
// DB接続
$pdo = new PDO('mysql:host=localhost;dbname=scamper;charset=utf8mb4',
    'root', // ← DBユーザー名
    ' '  // ← DBパスワード
);

// POSTデータ受け取り
$id = $_POST['id'] ?? '';
$content = $_POST['content'] ?? '';

// 入力バリデーション
if (!$id || !$content) {
    http_response_code(400);
    echo "Invalid input.";
    exit;
}

// 更新クエリ
$stmt = $pdo->prepare("UPDATE favs SET content = ? WHERE id = ?");
$stmt->execute([$content, $id]);

echo "OK";
?>
