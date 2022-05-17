<?php
$title = 'Mon produit';
ob_start();
?>

<h1>Mon super produit :</h1>

<div class="product">

    <h3>
        <?= htmlspecialchars($product['names']) ?>
    </h3>

    <h4>
        <?= htmlspecialchars($product['descriptions']) ?>
    </h4>


</div>

<?php 
$content = ob_get_clean();
require('template.php');
?>