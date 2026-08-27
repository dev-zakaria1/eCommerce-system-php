<nav class="navbar">
                <ul class="list">
                    <i><a href="/home">home</a></i>
                    <?php foreach ($category_name as $v): ?>
                        <li><a href="/home/home/getCategories/<?= $v->name ?>"><?= $v->name ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>