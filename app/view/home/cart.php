<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php ROOT ?>/front/css/header.css">
    <link rel="stylesheet" href="<?php ROOT ?>/front/css/footer.css">
    <link rel="stylesheet" href="<?php ROOT ?>/front/css/content.css">
    <link rel="stylesheet" href="<?php ROOT ?>/front/css/cart.css">

    <title>Document</title>
</head>
<!-- function pulse_minus(id) {
    let increaseBtn = document.querySelector(id);
    increaseBtn.addEventListener('click', function () {
        count++;
        numberInput.value = count;
        currentCount.textContent = count;
    });
} -->

<body>
    <div class="container">
        <div class="header">
            <div class="nav_container">
                <div class="Main_logo">
                    <div class="logo">Shopping</div>
                    <div class="img_logo"><img width="50px" src="<?php ROOT ?>/front/images/e-commerce.webp" alt=""></div>
                </div>
                <i class='bx bx-menu' id="menu-icon"></i>
                <nav class="navbar">
                    <ul class="list">
                        <li><a href="index.html">home</a></li>
                        <li>clothes</li>
                        <li>foods</li>
                        <li>purses</li>
                        <li>electronics</li>
                        <li>perfumes</li>
                    </ul>
                </nav>
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
                <div class="search">
                    <input type="text" id="btn">
                    <button type="search" id="search">search</button>
                </div>
            </div>
            <div class="row2">
                <div class="elements">
                    <a href="/home/home/getSignIn"><i class="fas fa-person"></i></a>
                    <a href="/"><i class="fas fa-shop"></i></a>
                </div>
                <div class="latest">
                    <div class="info">latest added :</div>
                    <div class="img_info"><img width="50px" src="<?php ROOT ?>/front/images/e-commerce.webp" alt=""></div>
                    <div class="img_info"><img width="50px" src="<?php ROOT ?>/front/images/e-commerce.webp" alt=""></div>
                    <div class="img_info"><img width="50px" src="<?php ROOT ?>/front/images/e-commerce.webp" alt=""></div>
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
    <div class="footer">
        <p>The copy right is saved : zakaria zarifa
        </p>
    </div>
    <script src="/javascript/cart.js"></script>
</body>

</html>