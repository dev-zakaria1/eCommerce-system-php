<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php ROOT ?>/back/auth/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="auth">
            <h1>welcome back :</h1>
            <form action="/admin/user/signIn" method="post">
                <div class="insert">
                    <label for="name" class="label">name</label>
                    <input type="text" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="insert">
                    <label for="email" class="label">email</label>
                    <input type="text" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="insert">
                    <label for="password" class="label">password</label>
                    <input type="text" id="password" name="password" placeholder="Enter password">
                </div>
                <button type="submit">sign in</button>
            </form>
            <div class="check">
                <p><small>you don't have acount? </small></p>
                <p>creat one <a href="/admin/signUp/index">here</a> :</p>
            </div>
        </div>
    </div>
</body>

</html>