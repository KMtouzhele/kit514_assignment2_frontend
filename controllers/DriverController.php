<?php
require_once './models/DriverModel.php';
require_once './views/DriverListView.php';
require_once './views/AddDriverView.php';

class DriverController
{
    private $driverModel;

    public function __construct()
    {
        $this->driverModel = new DriverModel();
    }
    public function listDrivers()
    {
        $drivers = $this->driverModel->getDrivers();
        $driverListView = new DriverListView();
        $driverListView->output($drivers);
    }
    public function showAddDriver()
    {
        $addDriverView = new AddDriverView();
        $addDriverView->output();
    }

    public function addDriver()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $driverData = [
                'number' => $_POST['number'],
                'name' => $_POST['name'],
                'shortName' => $_POST['shortName'],
                'skill' => [
                    'race' => $_POST['race'],
                    'street' => $_POST['street']
                ]
            ];
            $response = $this->driverModel->addDriver($driverData);
            if ($response) {
                header('Location: index.php?controller=list');
            } else {
                echo 'Failed to add driver';
                header('Location: index.php?controller=driver&action=toAdd');
            }
        }
    }

    public function deleteDriver($number)
    {
        if (!$number) {
            header('Location: index.php?controller=list');
        }
        $response = $this->driverModel->deleteDriver($number);
        if ($response) {
            header('Location: index.php?controller=list');
        } else {
            echo 'Failed to delete driver';
            header('Location: index.php?controller=list');
        }
    }
}
