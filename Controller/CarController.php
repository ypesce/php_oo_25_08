<?php
class CarController {

    public function addForm()
    {
        require 'View/insert_form.php';
    }

    public function persistForm()
    {
        $car = new Car(null, $_POST['marque'], $_POST['modele'],  $_POST['energie'], $_POST['automatique']);
        $articleManager = new CarManager();
        $articleManager->insert($car);
        header('Location: /correctionMVC/index.php?controller=default&action=home');
    }

    public function delete($id)
    {
        $carManager = new CarManager();
        $carManager->delete($id);
        header('Location: /correctionMVC/index.php?controller=default&action=home');
    }

    public function updateForm($id)
    {
        $carManager = new CarManager();
        $car = $carManager->select($id);

        require 'View/update_form.php';
    }

    public function update($id)
    {
        $carManager = new CarManager();
        $id = $carManager->select($id);
        $car = new Article($id, $_POST['marque'], $_POST['modele'],$_POST['energie'],$_POST['automatique']);
	    $carManager->update($car);

        header('Location: /index.php?controller=default&action=home');
    }
}
