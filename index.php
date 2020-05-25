<?php
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $articleController = new DefaultController();
        $articleController->home();
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'addForm'){
        $articleController = new ArticleController();
        $articleController->addForm();
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'addArticle'){
        $articleController = new ArticleController();
        $articleController->persistForm();
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $articleController = new ArticleController();
        $articleController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $articleController = new ArticleController();
        $articleController->updateForm($_GET['id']);
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'updateArticle' && isset($_GET['id'])){
        $articleController = new ArticleController();
        $articleController->updateArticle($_GET['id']);
    }
