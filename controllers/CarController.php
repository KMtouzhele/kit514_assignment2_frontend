<?php
require_once 'models/CarModel.php';
require_once 'views/CarListView.php';
require_once 'views/AddCarView.php';

class CarController
{
    private $carModel;

    public function __construct()
    {
        $this->carModel = new CarModel();
    }

    public function listCars()
    {
        $cars = $this->carModel->getCars();
        $carListView = new CarListView();
        $carListView->output($cars);
    }

    public function showAddCar()
    {
        $addCarView = new AddCarView();
        $addCarView->output();
    }

    public function addCar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $carData = [
                'id' => $_POST['id'],
                'suitability' => [
                    'race' => $_POST['race'],
                    'street' => $_POST['street']
                ],
                'reliability' => $_POST['reliability']
            ];
            $response = $this->carModel->addCar($carData);
            if ($response) {
                header('Location: index.php?controller=list');
            } else {
                echo 'Failed to add car';
                header('Location: index.php?action=toAdd');
            }
        }

    }

    public function deleteCar($id)
    {
        if (!$id) {
            header('Location: index.php?action=list');
        }
        $response = $this->carModel->deleteCar($id);
        if ($response) {
            header('Location: index.php?controller=list');
        } else {
            echo 'Failed to delete car';
            header('Location: index.php?controller=list');
        }
    }

}