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
            <h1>welcome to our shop :</h1>
            <form action="/admin/user/signUp" method="POST">
                <div class="insert">
                    <label for="name" class="label">name</label>
                    <input type="text" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="insert">
                    <label for="email" class="label">email</label>
                    <input type="text" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="insert">
                    <label for="password" class="label">password</label>
                    <input type="text" id="password" placeholder="Enter password" name="password">
                </div>
                <button type="submit">sign up</button>
            </form>
            <a class="check" href="/admin/SignIn/index">back</a>
        </div>
    </div>
</body>

</html>