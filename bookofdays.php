<?php
session_start();
if (!isset($_SESSION["user_email"])) {
    header("Location: https://mikatea.sakura.ne.jp/SCAMPER_Novelist/bookofdays/login.php");
    exit;
}
?>

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
<link rel="icon" href="../pictures/favicon.ico" type="image/x-icon">
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
            小説を書くことは、白紙の世界に“あなた”を投影すること。<br>
            ペンを持つ手が向き合う最初のキャラクターは、他の誰でもない、<b>あなた自身</b>かもしれません。<br><br>

            まずは、自分の内にある過去や違和感、ささやかな怒りや願いに耳を澄ませること。
            デザイン思考でいう<b>Empathize（共感）</b>を通して、<br> 
            言葉にならなかった気持ちを、物語の“種”として拾い上げてみてください。<br><br>

            次に、その中から「書きたい問い」や「向き合いたいテーマ」を選び取る時間が必要です。
            それは、デザイン思考でいう<b>Define（定義）</b>。
            一見取るに足らない感情や体験が、やがて誰かの心に触れる物語になるかもしれません。<br><br>

            ここから始まるのは、あなた自身の<b>“BOOK OF DAYS”</b>。  
            まだ名前のない物語を、そっと書きとめていきましょう。
        </div>
    </div>
    <!-- ボタン -->
    <div class="lesson-buttons">
        <a href="./favs/favs.php" class="lesson-button favs">💗<br>好きを語る<br>ノート</a>
        <a href="./journal/journal.php" class="lesson-button journal">💛<br>心の<br>デバッグログ</a>
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

<!-- <div class="section">
    <h2>3. Ideate（発想）</h2>
    <p class="en"><i>Generate ideas beyond the obvious.</i></p>
    <p class="ja">正解は求めず、とにかく数と多様性で発想を広げる。</p>
    <div class="lesson-buttons">
        <a href="./gacha.html" class="lesson-button gacha">🎲<br>SCAMPER<br>ガチャ</a>
        <a href="./brainstorm.html" class="lesson-button brainstorm">🧠<br>ブレイン<br>ストーミング</a>
    </div>
</div>

<div class="section">    
<h2>5. Test（検証）</h2>
    <p class="en"><i>Learn from feedback and refine.</i></p>
    <p class="ja">現実との対話から得た「違和感」は、次のデザインの種。</p>
    <div class="lesson-buttons">
        <a href="./feedback.html" class="lesson-button feedback">💬<br>フィード<br>バック</a>
        <a href="./rebuild.html" class="lesson-button rebuild">📈<br>リビルド<br>ログ</a>
    </div>
</div> -->