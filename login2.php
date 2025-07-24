<?php
session_start();
// すでにログイン済みならネタ帳へ
if (isset($_SESSION["user_id"])) {
    header("Location: https://mikatea.sakura.ne.jp/SCAMPER_Novelist/bookofdays/bookofdays.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
        <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 2rem;
        }
        .form-container {
            max-width: 450px;
            margin: auto;
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            margin-top: 1.8rem;
            width: 100%;
            background-color: #43aa8b;
            color: white;
            border: none;
            padding: 0.9rem;
            font-size: 1.1rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #368a70;
        }
        button[type="submit"],
        input[type="submit"] {
            margin-top: 1.8rem;
            width: 100%;
            background-color: #43aa8b;
            color: white;
            border: none;
            padding: 0.9rem;
            font-size: 1.1rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
        button[type="submit"]:hover {
            background-color: #368a70;
        }
        @media (max-width: 600px) {
            body {
                padding: 1rem;
            }
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
    <link rel="icon" href="./pictures/favicon.ico" type="image/x-icon">
</head>
<body>
    <h1>ログイン</h1>

    <?php if (isset($_GET['error'])): ?>
        <p style="color:red;">ログインに失敗しました。メールアドレスまたはパスワードが間違っています。</p>
    <?php endif; ?>

    <form action="https://mikatea.sakura.ne.jp/SCAMPER_Novelist/user_register/login_act.php" method="POST">
        <label>メールアドレス: <input type="email" name="email" required></label><br>
        <label>パスワード: <input type="password" name="password" required></label><br>
        <button type="submit">ログイン</button>
    </form>

    <p><a href="./register.php">新規登録はこちら</a></p>
</body>
</html>
