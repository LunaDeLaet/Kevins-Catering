<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ? AND Soort = "voorgerecht"');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product bestaat niet!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product bestaat niet!');
}
?>

<?=template_header('Voorgerechten')?>


<div class="product content-wrapper container">
<div class="row">
    <div class="col">
        <img class="img-product" src="imgs/<?=$product['img']?>" alt="<?=$product['name']?>">
    </div>
    <div class="col">
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
            &euro;<?=$product['price']?> per portie
        </span>
        <div class="description">
            <?=$product['desc']?>
        </div>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" min="1" max="200" placeholder="Aantal personen" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Toevoegen aan winkelwagen">
        </form>
    </div>
</div>
</div>

<?=template_footer()?>