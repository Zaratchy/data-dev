<?php

require('controllers/productsController.php');


try {
        listProducts();
    }

catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}

