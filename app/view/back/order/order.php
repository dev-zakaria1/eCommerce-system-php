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

                        <th>address</th>
                        <th>date</th>
                        <th>payment_status</th>
                        <th>total_amount</th>
                        <th>name</th>
                        <th>products</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $v): ?>
                        <tr>
                            <td><?= $v->id ?></td>
                            <td><?= $v->address ?></td>
                            <td><?= $v->order_date ?></td>
                            <td><?= $v->payment_status ?></td>
                            <td><?= $v->total_amount ?></td>
                            <td><?= $v->name ?></td>
                            <td><a class="btn" href="/admin/order/getProOrder/<?= $v->id ?>">ALL PRODUCT</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>