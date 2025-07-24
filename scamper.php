<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: ../user_register/login2.php"); // ログインページへ
    exit;
}
?>

<!-- 基本的にはbookofdays.phpを使いまわす。 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>What's SCAMPER?</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f7f7f7;
        background: url("../pictures/Ireland_with_fog.jpg") center center / cover no-repeat fixed;
        color: #333;
        line-height: 1.6;
        margin: 0;
        padding: 2rem;
    }
    h1, h2, h3 {
        color: #222;
    }
    blockquote {
        border-left: 4px solid #999;
        padding-left: 1rem;
        color: #666;
        font-style: italic;
    }
    code {
        background: #eee;
        padding: 2px 4px;
        border-radius: 4px;
    }
    .section1 {
        background: rgba(255, 255, 255, 0.7); /* 背景のみ透明 */
        padding: 2rem;
        margin-bottom: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
        text-align: center;
    }
    .section {
        background: rgba(255, 255, 255, 0.7); /* 背景のみ透明 */
        padding: 1rem;
        margin-bottom: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
        text-align: center;
    }
    .en, .ja {
        margin-top: 0.2rem;
        margin-bottom: 0.2rem;
    }
    ul {
        padding-left: 1.5rem;
    }
    a {
        color: #0366d6;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    footer {
        text-align: center;
        font-size: 0.9rem;
        color: #888;
        margin-top: 4rem;
    }
    .cta-button {
        display: inline-block;
        background-color: #0366d6;
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .cta-button:hover {
        background-color: #024a9c;
    }

    .lesson-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .lesson-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        font-weight: bold;
        text-align: center;
        color: white;
        text-decoration: none;
        transition: transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        line-height: 1.2;
        font-size: 0.85rem;
        padding: 0.5rem;
    }

    .lesson-button:hover {
        transform: scale(1.05);
    }

    /* 色バリエーション */
    .favs {
        background-color: mediumvioletred;
    }
    .journal {
        background-color: midnightblue;
    }


    /* ===== スマホ対応レスポンシブ追加 ===== */
    @media (max-width: 600px) {
        body {
            padding: 0.5rem;
        }
        .section {
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 6px;
        }
        h1 {
            font-size: 1.6rem;
        }
        h2 {
            font-size: 1.1rem;
        }
        h3 {
            font-size: 1.0rem;
        }
        .cta-button {
            width: 100%;
            text-align: center;
            padding: 1rem;
            font-size: 1.1rem;
            border-radius: 8px;
        }
        blockquote {
            font-size: 0.95rem;
            padding-left: 0.5rem;
        }
        footer {
            font-size: 0.8rem;
            padding: 1rem 0;
        }
    }

    .accordion {
        margin: 1em 0;
    }
    .accordion-btn {
        width: 100%;
        background: #e6eefc;
        color: #2c3e50;
        border: none;
        padding: 1em;
        border-radius: 8px;
        font-weight: bold;
        font-size: 1.05rem;
        cursor: pointer;
        transition: background 0.2s;
        box-shadow: 0 1.5px 5px rgba(0,0,0,0.07);
    }
    .accordion-btn:hover,
    .accordion-btn:focus {
        background: #cde1f9;
    }
    .accordion-content {
        display: none;
        padding: 1em 0.8em 0.8em 0.8em;
        background: rgba(255,255,255,0.97);
        border-radius: 0 0 8px 8px;
        font-size: 0.97rem;
        line-height: 1.5;
        text-align: left;
    }
    .accordion.active .accordion-content {
        display: block;
    }
</style>
<link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>

<!-- ここからが本番！ -->
<div class="section">
    <h2>📚BOOK OF DAYS; あなた自身の物語</h2>
    <p class="en">This way became my journey<br>
    — Enya / <i>Book Of Days</i><br>
    <a href="https://youtu.be/LiBwr4U59EI?feature=shared" target="_blank" style="font-size: 0.9em;">▶︎ Listen on YouTube</a>
    </p>

    <!-- アコーディオン -->
    <div class="accordion">
        <button class="accordion-btn" type="button">
            まずは、自分という物語から。<br>（タップで説明表示）
        </button>
        <div class="accordion-content">
            小説を書くことは、まだ形を持たない想像を“現実”に変える創造行為。<br>
            ペンを持つ手が最初に向き合うのは、他の誰でもない、<b>あなた自身</b>かもしれません。<br><br>

            アイデアが浮かばないときは、SCAMPERの7つの視点を試してみてください。<br>
            <b>Substitute（代える）</b>──登場人物の性別や立場をすり替えてみる。<br>
            <b>Combine（組み合わせる）</b>──ジャンルや価値観を融合させてみる。<br>
            <b>Adapt（応用する）</b>──日常の出来事を別の世界に移してみる。<br>
            <b>Modify（変える）</b>──スケールや時間軸、感情の強さを変えてみる。<br>
            <b>Put to another use（転用する）</b>──他人の体験を自分の物語の燃料にしてみる。<br>
            <b>Eliminate（省く）</b>──余分な設定や人物を削って、本質を研ぎ澄ます。<br>
            <b>Reverse / Rearrange（逆・並べ替え）</b>──順番や前提をひっくり返してみる。<br><br>

            ちなみに、このアプリはEnyaの「Book Of Days」からインスパイアを受けています。<br>
            SCAMPERでいえば、<b>Put to another use（転用する）</b>の視点で作ったといえるかもしれません。<br>

            まだ名前のない物語を、SCAMPERの風に乗せて、今ここから育てていきましょう。
        </div>
    </div>
    <!-- ボタン -->
    <div class="lesson-buttons">
        <a href="./scamper/gacha.php" class="lesson-button favs">💗<br>ガチャを<br>回す</a>
    </div>
</div>

<script>
document.querySelectorAll('.accordion-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const acc = this.parentElement;
        acc.classList.toggle('active');
    });
});
</script>

</body>
</html>

