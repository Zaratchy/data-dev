<?php $title = "Home Crud php"; ?>

<?php ob_start(); ?>


    <h1>Ma super page liste de produits</h1>

    <div class="products text-center">

        <div class="flower-natural">
                <h2>Nos fleurs naturelles :</h2>
                    <?php  
                        foreach($flowerNatural as $flowerNaturals){
                    ?> 
                <h3>
                    <?=
                        htmlspecialchars($flowerNaturals['names']);
                    ?>
                </h3>
                <h3>
                    <?=
                        htmlspecialchars($flowerNaturals['descriptions']);
                    ?>
                </h3>
                <a href="router.php?action=product&amp; product_id=<?= $flowerNaturals['product_id'] ?>">Voir produit</a>
                    <?php
                        } 
                    ?>
        </div>

        <div class="flower-artificial">
            <h2>Nos fleurs artificielles :</h2>
                <?php  
                    foreach($flowerArtificial as $flowerArtificials){
                ?> 
            <h3>
                <?=
                    htmlspecialchars($flowerArtificials['names']);
                ?>
            </h3>
            <h3>
                <?=
                    htmlspecialchars($flowerArtificials['descriptions']);
                ?>
            </h3>
            <a href="router.php?action=product&amp; product_id=<?= $flowerArtificials['product_id'] ?>">Voir produit</a>
                <?php
                    } 
                ?>
        </div>
    

        <div class="funeral-plaque">
            <h2>Nos plaques funéraires :</h2>
                <?php  
                    foreach($plaque as $plaques){
                ?> 
            <h3>
                <?=
                    htmlspecialchars($plaques['names']);
                ?>
            </h3>
            <h3>
                <?=
                    htmlspecialchars($plaques['descriptions']);
                ?>
            </h3>
            <a href="router.php?action=product&amp; product_id=<?= $plaques['product_id'] ?>">Voir produit</a>
                <?php
                    } 
                ?>
        </div>
    
    </div>
    
    <h2>Créer un produit :</h2>

    <form action="router.php?action=addProduct&amp;" method="post">
        <div>
            <label for="names">Nom du produit :</label><br />
            <input type="text" id="names" name="names" />
        </div>
        <div>
            <label for="descriptions">Déscription du produit :</label><br />
            <textarea id="descriptions" name="descriptions"></textarea>
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
            <input type="submit" />
        </div>
    </form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

