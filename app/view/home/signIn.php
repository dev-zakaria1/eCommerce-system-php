<?php require_once('layout/headAuth.php') ?>

<body>

    <div class="auth">
        <h1>welcome back :</h1>
        <form action="/home/signIn/signIn/" method="post">
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
            <p>creat one <a href="/home/signUp/index">here</a> :</p>
        </div>
    </div>
</body>

</html>