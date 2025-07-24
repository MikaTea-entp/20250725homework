<?php
// DB接続
require_once("db.php");

// ランダムに1件取得
$stmt = $pdo->query("SELECT id, title, content FROM entries ORDER BY RAND() LIMIT 1");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// SCAMPER項目（ランダムに1つ選ぶ）
$scamper = ["Substitute（代える）", "Combine（組み合わせる）", "Adapt（応用する）", "Modify（変える）", "Put to another use（他の用途）", "Eliminate（省く）", "Reverse / Rearrange（逆・並べ替え）"];
$selected = $scamper[array_rand($scamper)];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>SCAMPERブレインストーム</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f8fb;
            padding: 2rem;
            color: #333;
        }
        .section {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            max-width: 700px;
            margin: 0 auto;
        }
        h1 {
            color: #2c3e50;
        }
        blockquote {
            border-left: 4px solid #9d4edd;
            margin: 1rem 0;
            padding-left: 1rem;
            color: #555;
            font-style: italic;
            background: #f9f5ff;
            border-radius: 6px;
        }
        .scamper {
            font-size: 1.2rem;
            font-weight: bold;
            color: #9d4edd;
            margin-top: 1.5rem;
        }
        .refresh-btn {
            display: inline-block;
            margin-top: 2rem;
            background: #43aa8b;
            color: white;
            padding: 0.7rem 1.4rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }
        .refresh-btn:hover {
            background: #368a70;
        }
    </style>
</head>
<body>
    <div class="section">
        <h1>🎲 SCAMPERで発想を膨らませる</h1>

        <p><strong>あなたの過去ネタ：</strong></p>
        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
        <blockquote><?php echo nl2br(htmlspecialchars($row['content'])); ?></blockquote>

        <p class="scamper">👉 選ばれたSCAMPER視点：<br><span><?php echo $selected; ?></span></p>

        <a class="refresh-btn" href="brainstorm.php">もう一回試す</a>
    </div>
</body>
</html>
