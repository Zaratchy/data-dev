<?php
$title = 'Mon produit';
ob_start();
?>

<h1>Mon super produit :</h1>

<div class="product">

    <h3>
        <?= htmlspecialchars($product['names']); ?>
    </h3>

    <h4>
        <?= htmlspecialchars($product['descriptions']); ?>
    </h4>

<!-- Delete recipe -->
    <a href="router.php?action=deleteProduct&amp; product_id=<?= $product['product_id'] ?> ">Supprimer le produit</a>

<!-- Update recipe -->
    <h2>Mettre à jour : <?= htmlspecialchars($product['names']) ?></h2>
    <form action="router.php?action=updateProduct&amp; product_id=<?= $product['product_id'] ?> " method="POST">
        <div>
            <label for="product_id"></label>
            <input type="hidden" id="product_id" name="product_id" value="<?= $product['product_id'] ?>">
        </div>
        <div>
            <label for="names">Titre de la recette</label>
            <input type="text" id="names" name="names"value="<?= htmlspecialchars($product['names']); ?>">
        </div>
        <div>
            <label for="types">Types du produit :</label><br />
            <select id="types" name="types">
                <option value="">--Choisissez le type d'article--</option>
                <option value="natural">Fleur naturelle</option>
                <option value="artificial">Fleur artificielle</option>
                <option value="plaque">Plaque funéraire</option>
            </select>
        </div>
        <div>
            <label for="descriptions">Description de la recette</label>
            <textarea id="descriptions" name="descriptions"><?= htmlspecialchars($product['descriptions']); ?></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>

</div>

<?php 
$content = ob_get_clean();
require('template.php');
?>