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
        <?php require_once(VIEW.'/back/layout/sidebar.php') ?>
        <div class="content">
            <div class="add">
                <a class="btn" href="/admin/cat/getAddCategory">add</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>icons</th>
                        <th>user</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $v): ?>
                        <tr>
                            <td><?= $v->name ?></td>
                            <td><?= $v->icons ?></td>
                            <td><?= $v->user_name ?></td>
                            <td><a href="/admin/cat/getUpdateCategory/<?= $v->id ?>" class="btn update">update</a></td>
                            <td class="hello"><a href="/admin/cat/delete/<?= $v->id ?>" class="btn delete">delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>