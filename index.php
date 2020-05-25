<?php
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $carcontroller = new DefaultController();
	    $carcontroller->home();
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'addForm'){
	    $carcontroller = new CarController();
	    $carcontroller->addForm();
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'addArticle'){
	    $carcontroller = new CarController();
	    $carcontroller->persistForm();
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'delete' && isset($_GET['id'])){
	    $carcontroller = new CarController();
	    $carcontroller->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
	    $carcontroller = new CarController();
	    $carcontroller->updateForm($_GET['id']);
    }
    else if($_GET['controller'] === 'car' && $_GET['action'] === 'updateArticle' && isset($_GET['id'])){
	    $carcontroller = new CarController();
	    $carcontroller->update($_GET['id']);
    }
