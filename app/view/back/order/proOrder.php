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
            <table>
                <thead>
                    <tr>
                        <th>order</th>
                        <th>product</th>
                        <th>img</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $v): ?>
                        <tr>
                            <td><?= $v->id ?></td>
                            <td><?= $v->name ?></td>
                            <td><img width="100px" src="<?php ROOT ?>/back/upload/images/<?= $v->img ?>" alt=""></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>