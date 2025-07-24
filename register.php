<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="css/style.css" rel="stylesheet">
    <title>ユーザー登録</title>
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
        @media (max-width: 600px) {
            body {
                padding: 1rem;
            }
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <main>
        <div class="container">
            <form name="form1" action="register_act.php" method="post">
                <fieldset>
                    <legend>📜ユーザー登録</legend>
                    <label>
                        <span>ユーザー名:</span>
                        <input type="text" name="username" required />
                    </label>
                    <label>
                        <span>メール:</span>
                        <input type="email" name="email" required />
                    </label>
                    <label>
                        <span>パスワード:</span>
                        <input type="password" name="password" required />
                    </label>
                    <input type="submit" value="登録する" />
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>
