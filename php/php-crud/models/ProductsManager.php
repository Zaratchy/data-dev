<?php 

require_once('Manager.php');

class ProductsManager extends Manager {

    public function getProducts(){

        $db = $this->dbConnect();
        $products = $db->query('SELECT * FROM products');

        return $products;
    }

    public function getProduct($productId) {

        $db = $this->dbConnect();
        $products = $db->prepare('SELECT * FROM products WHERE product_id = ?');
        $products->execute(array($productId));
        $product = $products->fetch();

        return $product;
    }

    public function postProduct($names, $descriptions, $types) {

        $db = $this->dbConnect();
        $products = $db->prepare('INSERT INTO products(names, descriptions, types) VALUES(?, ?, ?)');
        $newProduct = $products->execute(array($names, $descriptions, $types));

        return $newProduct;
    }

    public function deleteProducts($productId) {

        $db = $this->dbConnect();
        $products = $db->prepare('DELETE FROM products WHERE product_id = ?');
        $delete = $products->execute(array($productId));

        return $delete;
    }

}