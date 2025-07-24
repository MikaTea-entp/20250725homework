<?php
session_start();
require_once("../db.php");

$email = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';

if (empty($email) || empty($password)) {
    header("Location: login.php?error=1");
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_email"] = $user["email"];
        $_SESSION["username"] = $user["username"];
        header("Location: https://mikatea.sakura.ne.jp/SCAMPER_Novelist/bookofdays/bookofdays.php");
        exit;
    } else {
        header("Location: login.php?error=1");
        exit;
    }
} catch (PDOException $e) {
    echo "DBエラー: " . $e->getMessage();
    exit;
}


