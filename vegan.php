<?php

include 'functions.php';
$pdo = pdo_connect_mysql();

// The amounts of products to show on each page
$num_products_on_each_page = 20;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the name
$stmt = $pdo->prepare('SELECT * FROM desserts ORDER BY name ASC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>

<?php

    require_once('functions.php');

    template_header('Veganistische gerechten');
?>

<section class="bestel">
    <h4>VEGANISTISCHE GERECHTEN</h4>

    <p class="text"></p>
</section>
<section class="terug">
    <a href="bestel.php">Ga terug</a>
  </section>
<section class="text vlees">
<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>

            <div class="col">
                <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
                    <img src="imgs/<?=$product['img']?>" alt="<?=$product['name']?>">
                    <div class="centered produkt">
                        <?=$product['name']?>
                    </div>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
</div>

</section>

<?=template_footer()?>