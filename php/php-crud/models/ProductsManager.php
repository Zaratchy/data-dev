<?php 

require_once('Manager.php');

class ProductsManager extends Manager {

    public function getProducts(){

        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM products');

        return $req;
    }

}