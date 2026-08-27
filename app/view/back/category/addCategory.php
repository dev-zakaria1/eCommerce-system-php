<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php ROOT ?>/back/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php require_once(VIEW . '/back/layout/sidebar.php') ?>
        <div class="content">
            <h2>add category</h2>
            <form id="simpleForm" action="/admin/cat/add" method="post">
                <div class="input-group">
                    <label for="name">name</label>
                    <input type="text" id="name" name="name" placeholder="name">
                </div>
                <div class="input-group">
                    <label for="icons">icons</label>
                    <input type="text" id="icons" name="icons" placeholder="icons">
                </div>
                <button type="submit">add</button>
            </form>
        </div>
    </div>

</body>

</html>