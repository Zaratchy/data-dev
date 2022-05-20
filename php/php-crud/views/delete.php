<?php $title = 'Page admin'; ?>

<?php ob_start(); ?>

<h1>Ma page supprimer un produit</h1>

<?php 



?>

<h1>Supprimer le produit ?</h1>
        <form action="../router.php?action=deleteProduct&amp;" method="POST">
            <div class="mb-3 visually-hidden">
                <label for="id" class="form-label">Identifiant de la recette</label>
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $flowerArtificials['product_id'] ?>">
            </div>
            
            <button type="submit" class="btn btn-danger">La suppression est définitive</button>
        </form>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>