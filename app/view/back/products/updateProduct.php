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
            <h2>update product</h2>
            <form id="simpleForm" action="/admin/product/update/<?= $id ?>" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" placeholder="name" value="<?= $product->name ?>">
                </div>

                <div class="input-group">
                    <label for="price">price</label>
                    <input type="text" name="price" id="price" placeholder="price" value="<?= $product->price ?>">
                </div>

                <div class="input-group">
                    <img width="100px" src="<?php ROOT ?>/back/upload/images/<?= $catOne->img ?>" alt="">
                    <label for="img">img</label>
                    <input type="file" name="img" id="img" placeholder="price" value="<?= $product->price ?>">
                </div>
                <div class="input-group">
                    <label for="category">category</label>
                    <select name="category_id" id="" class="pink-select">
                        <?php foreach ($category as $v): ?>
                            <option value="<?php echo $v->id ?>"><?= $v->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit">update</button>
            </form>
        </div>
    </div>

</body>

</html>