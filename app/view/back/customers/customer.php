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
        <nav>
            <div class="logo">
                <p>shopping</p>
                <div class="img"><img width="200px" src="<?php ROOT ?>/front/images/e-commerce.webp" alt=""></div>
            </div>

            <ul>
                <p>page:</p>
                <li><a href="/admin/admin/index">Dashbord
                    </a>
                </li>
                <li><a href="/admin/cat/index">category</a></li>
                <li><a href="/admin/order/index">orders</a></li>
                <li><a href="/admin/customer/index">customers</a></li>
                <li><a href="/admin/product/index">products</a></li>
                <li><a href="/admin/signIn/index">sign in</a></li>
                <li><a href="/admin/signUp/index">sign up</a></li>
            </ul>
            <div class="log-out">
                <a href="/admin/user/log_out">log-out</a>
            </div>
        </nav>
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