<?php

require_once('models/ProductsManager.php');

function listProducts(){

    $productsManager = new ProductsManager();
    $products = $productsManager->getProducts();

    $flowerNatural = array();
    $flowerArtificial = array();
    $plaque = array();

    while ($data = $products->fetch()){
        switch ($data['types']) {
            case 'artificial':
                array_push($flowerArtificial, $data);
                break;
            case 'natural':
                array_push($flowerNatural, $data);
                break;
            case 'plaque':
                array_push($plaque, $data);
                break;
        }
    }

    $products->closeCursor();

    require('./views/listProducts.php');
}

function product() {

    $productsManager = new ProductsManager();

    $product = $productsManager->getProduct($_GET['product_id']);

    require('./views/product.php');
}

function addProduct($names, $descriptions, $type) {

    $productManager = new ProductsManager();

    $newProduct = $productManager->postProduct($names, $descriptions, $type);

    if ($newProduct === false) {
        throw new Exception('Impossible d\'ajouter un produit !');
    } 
}

function deleteProduct() {

    $productManager = new ProductsManager();

    $deleteProduct = $productManager->deleteProducts($_GET['product_id']);

    header('Location: router.php');
}

function updateProduct($names, $descriptions, $types, $productId) {

    $productManager = new ProductsManager();

    $updateProduct = $productManager->updateProducts($names, $descriptions, $types, $productId);
    
    header('Location: router.php');
}