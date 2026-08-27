<?php require_once('layout/header.php') ?>
<div class="container">
    <div class="header">
        <div class="nav_container">
            <div class="Main_logo">
                <div class="logo">Shopping</div>
                <div class="img_logo"><img width="50px" src="<?php ROOT ?>/front/images/e-commerce.webp" alt=""></div>
            </div>
            <i class='bx bx-menu' id="menu-icon"></i>
            <?php require_once('layout/nav.php') ?>

            </form>
        </div>
        <br>
        <div class="row1">
            <div class="elements">
                <i class="fab fa-youtube"></i>

                <i class="fab fa-facebook-f"></i>
                <!-- <i class="fas fa-shop"></i> هاتف -->
                <i class="fab fa-snapchat-ghost"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fas fa-search"></i>
            </div>

            <?php require_once('layout/search.php') ?>
        </div>
        <div class="row2">
            <div class="elements elements-main">
                <div class="auth-info">
                    <?php if (empty($sessionCustomer)) { ?><a href="/home/signIn/index"><i class="fas fa-person"></i></a>
                    <?php } else {
                    ?> <form action="/home/logout/logout" method="post"><button class="button-log-out" type="submit">log-out</button></form>
                    <?php
                    }
                    ?>
                </div>
                <a href="/home/home/getcart"><i class="fas fa-shop cart"></i></a>
            </div>
            <div class="latest">
                <div class="info">latest added :</div>
                <?php foreach ($added_latest as $v): ?>
                    <div class="img_info"><img width="50px" src="<?php ROOT ?>/back/upload/images/<?= $v->img  ?>" alt=""></div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <br>
    <div class="content">
        <div class="card_group">
            <?php $i = 0;
            foreach ($product as $v): ?>
                <div class="card" id="<?= $i ?>">
                    <div value="" id="id" hidden><?= $v->id ?></div>
                    <div><img id="imgCard" width="258px" height="150px" src="<?php ROOT ?>/back/upload/images/<?= $v->img ?>">
                    </div>
                    <div class="category"><?= $v->catName ?></div>
                    <div class="product"><?= $v->name ?> </div>
                    <div class="price"><?= $v->price ?></div>
                    <div class="info">
                        <a href="">
                            <div class="fas fa-eye"></div>
                        </a>
                        <p> : more details here</p>
                    </div>
                    <div class="input_group" id="<?= $i ?>">
                        <button onclick="plus(this.id)" id="increaseBtn<?= $i ?>"><i class="fas fa-plus"></i></button>
                        <input type="number" class="numberValue" id="numberInput<?= $i ?>" value="1" max="10" min="0">
                        <button onclick="minus(this.id)" id="decreaseBtn<?= $i ?>"><i class="fas fa-minus"></i></button>
                    </div>
                    <button onclick="create(this.id)" class="btn subCart" id="MakeCart<?= $i ?>" type="sumbit">add to cart</button>
                </div>
            <?php $i++;
            endforeach; ?>
        </div>
    </div>
</div>
<div class="footer">
    <p>The copy right is saved : zakaria zarifa
    </p>
</div>
<script src="<?php ROOT ?>/javascript/main.js"></script>
</body>

</html>