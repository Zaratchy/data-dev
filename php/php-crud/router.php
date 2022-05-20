<?php

require('controllers/productsController.php');


try {
        
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'listProducts') {
                listProducts();
            }
            elseif ($_GET['action'] == 'product') {
                if (isset($_GET['product_id']) && $_GET['product_id'] > 0) {
                    product();
                }
                else {
                    // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            elseif ($_GET['action'] == 'deleteProduct') {
                if (isset($_GET['product_id']) && $_GET['product_id'] > 0 ) {
                    deleteProduct();
                } else {
                    throw new Exception('Aucun id pour supprimer le produit ?');
                }
                
            }

            elseif ($_GET['action'] == 'addProduct') {
                if(!empty($_POST['names']) && !empty($_POST['descriptions']) && !empty($_POST['types'])) {
                    addProduct($_POST['names'], $_POST['descriptions'],  $_POST['types']);
                    header('Location: router.php');
                } else {
                    throw new Exception('Veuillez remplir tous les champs !');
                }
                    }
                    else {
                        // Autre exception
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
               
        }
        else {
            listProducts();
        }
    }
    catch(Exception $e) { // S'il y a eu une erreur, alors...
        echo 'Erreur : ' . $e->getMessage();
    }
