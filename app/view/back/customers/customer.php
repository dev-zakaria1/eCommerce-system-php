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
                        <th>name</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>pasword</th>
                        <th>product</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $v): ?>
                        <tr>
                            <td><?= $v->name ?></td>
                            <td><?= $v->phone ?></td>
                            <td><?= $v->email ?></td>
                            <td><?= $v->password ?></td>
                            <td><a class="btn" href="/admin/customer/getoneCustomer/<?= $v->id ?>">ALL PRODUCT</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>