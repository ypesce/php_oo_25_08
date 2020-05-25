<?php
class DefaultController{

    public function home()
    {
        $carMngr = new CarManager();
        $cars = $carMngr->selectAll();
        require 'View/home_view.php';
    }
}