<?php $title = "Home Crud php"; ?>

<?php ob_start(); ?>


    <h1>Ma super page d'accueil Crud PHP</h1>

    <div class="products text-center">

        <div class="flower-natural">
                <h2>Nos fleurs naturelles :</h2>
                    <?php  
                        foreach($flowerNatural as $flowerNaturals){
                    ?> 
                <h3>
                    <?=
                        htmlspecialchars($flowerNaturals['name']);
                    ?>
                </h3>
                <h3>
                    <?=
                        htmlspecialchars($flowerNaturals['description']);
                    ?>
                </h3>
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
                    htmlspecialchars($flowerArtificials['name']);
                ?>
            </h3>
            <h3>
                <?=
                    htmlspecialchars($flowerArtificials['description']);
                ?>
            </h3>
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
                    htmlspecialchars($plaques['name']);
                ?>
            </h3>
            <h3>
                <?=
                    htmlspecialchars($plaques['description']);
                ?>
            </h3>
                <?php
                    } 
                ?>
        </div>
    
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

