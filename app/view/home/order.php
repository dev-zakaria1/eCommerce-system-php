<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php

                                    use PRO\core\session;

                                    ROOT ?>/front/css/header.css">
    <link rel="stylesheet" href="<?php ROOT ?>/front/css/footer.css">
    <link rel="stylesheet" href="<?php ROOT ?>/front/css/content.css">
    <link rel="stylesheet" href="<?php ROOT ?>/front/css/schedual.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="scheduale">
              <h2 class="form-title">make your order</h2>
              <form action="/home/home/makeOrder" method="post">
                <?php $i = 0;
                foreach ($productIds as $pro): ?>
                    <input type="text" name="product_id<?= $i++ ?>" value="<?= $pro->id ?>" hidden>
                <?php endforeach; ?>
                <input type="text" value="<?= count($productIds) ?>" name="numberProduct" hidden>
                <input type="text" value="<?= $custId ?>" name="customer_id" hidden>
                    <div class="form-group">
                          <label class="form-label" for="address">address</label>
                          <input type="text" class="form-input" id="address" name="address" placeholder="enter your address">
                        </div>
                   
                    <div class="form-group">
                          <label class="form-label" for="order_date">order_date </label>
                          <input type="date" class="form-input" id="order_date" name="order_date" placeholder="order_date">
                </div>
                   
                    <div class="form-group">
                          <label class="form-label" for="total">total</label>
                          <input class="form-input" id="total" value="<?php echo $total ?>" name="total" placeholder="total" readonly>
                     </div>
                   
                    <div class="form-group">
                          <label class="form-label" for="options">payment_status</label>
                          <select class="form-select" id="options" name="payment_status">
                                <option value="visa" selected>visa</option>
                                <option value="cash">cash</option>
                                <option value="bit_coin">bit_coin</option>
                           </select>
                </div>
                <button type="submit" class="submit-btn">send</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>The copy right is saved : zakaria zarifa
        </p>
    </div>
    <script src="javascript/main.js">

    </script>

</body>

</html>