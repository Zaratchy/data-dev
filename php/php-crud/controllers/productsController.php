<?php

require_once('models/ProductsManager.php');

function listProducts(){

    $productsManager = new ProductsManager();
    $products = $productsManager->getProducts();

    $flowerNatural = array();
    $flowerArtificial = array();
    $plaque = array();

    while ($data = $products->fetch()){
        switch ($data['type']) {
            case 0:
                array_push($flowerArtificial, $data);
                break;
            case 1:
                array_push($flowerNatural, $data);
                break;
            case 2:
                array_push($plaque, $data);
                break;
        }
    }

    $products->closeCursor();

    require('./views/home.php');

};