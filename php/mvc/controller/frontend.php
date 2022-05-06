<?php

//Class loading 
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

//Recover the data of the function getPosts and place them in the function listPosts and send the data in the view
function listPosts()
{
    $postManager = new PostManager(); // Create object
    $posts = $postManager->getPosts(); // Call function of the object

    require('./view/frontend/listPostsView.php');
}

//Recover the data of the function getPost and place them in the function Post and send the data in the view, relative to are id.
function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('./view/frontend/postView.php');
}

//Recover the data and sned them to the model for save them in the database.
function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);


    if ($affectedLines === false) {
        // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}