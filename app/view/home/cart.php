<?php require_once('layout/header.php') ?>
    <div class="container">
        <div class="header">
            <div class="nav_container">
                <div class="Main_logo">
                    <div class="logo">Shopping</div>
                    <div class="img_logo"><img width="50px" src="<?php ROOT ?>/front/images/e-commerce.webp" alt=""></div>
                </div>
                <i class='bx bx-menu' id="menu-icon"></i>
               
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
                
            </div>
            <div class="row2">
                <div class="elements">
                    <a href="/home/signIn/index"><i class="fas fa-person"></i></a>
                    <a href="/"><i class="fas fa-shop"></i></a>
                </div>
                
            </div>

        </div>
        <br>
        <div class="content_Cart">
            <form action="/home/home/getOrder" method="POST">
            </form>
            <table>
                <thead>
                    <tr>
                        <th>img</th>
                        <th>category</th>
                        <th>product</th>
                        <th>price</th>
                        <th>total</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>
 <?php require_once('layout/footer.php') ?>