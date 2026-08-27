<?php require_once('layout/head.php') ?>

<body>
    <div class="container">
        <?php require_once(VIEW . '/back/layout/sidebar.php') ?>
        <div class="content">
            <div class="info-main-dashboard">
                <div class="box-info">
                    <div class="box">
                        <p class="box-title">Users :</p>
                        <div class="countinfo"><?= $numbersUsers ?></div>
                    </div>
                    <div class="box">
                        <p class="box-title">Customers :</p>
                        <div class="countinfo"><?= $numbersCustomers ?></div>

                    </div>
                    <div class="box">
                        <p class="box-title">Products :</p>
                        <div class="countinfo"><?= $numbersProducts ?></div>

                    </div>
                    <div class="box">
                        <p class="box-title">Orders :</p>
                        <div class="countinfo"><?= $numbersOrders  ?></div>

                    </div>
                </div>
                <div class="tabel-title-dashboard">Latest Orders :</div>
                <div class="table">
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
                            foreach ($latestOrders as $v): ?>
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
        </div>
    </div>
</body>

</html>