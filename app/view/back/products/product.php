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
            <div class="add">
                <a class="btn" href="/admin/product/getAddProduct">add</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>price</th>
                        <th>img</th>
                        <th>category</th>
                        <th>user</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $v): ?>
                        <tr>
                            <td><?= $v->name ?></td>
                            <td><?= $v->price ?></td>
                            <td><img width="80px" src="<?php ROOT ?>/back/upload/images/<?= $v->img ?>" alt="" srcset="" </td>
                            <td><?= $v->catName ?></td>
                            <td><?= $v->userName ?></td>
                            <td><a href="/admin/product/getUpdateProduct/<?= $v->id ?>" class="btn update">update</a></td>
                            <td><a href="/admin/product/delete/<?= $v->id ?>" class="btn delete">delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>