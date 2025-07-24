<?php
require_once("db.php");

// フォームから受け取る
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// パスワードをハッシュ化
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 登録処理
try {
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashed_password]);
    // 成功したらトップにリダイレクト
    header("Location: https://mikatea.sakura.ne.jp/SCAMPER_Novelist/index.html");
    exit;
} catch (PDOException $e) {
    header("Location: register.php?error=1");
    exit;
}
?>