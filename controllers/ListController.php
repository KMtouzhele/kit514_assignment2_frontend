<?php
require_once 'views/ListView.php';
require_once 'models/DriverModel.php';
require_once 'models/CarModel.php';
require_once 'models/TrackModel.php';
require_once 'models/RaceModel.php';


class ListController
{
    public function listAll()
    {
        $driverModel = new DriverModel();
        $carModel = new CarModel();
        $trackModel = new TrackModel();
        $raceModel = new RaceModel();
        $drivers = $driverModel->getDrivers();
        $cars = $carModel->getCars();
        $tracks = $trackModel->getTracks();
        $races = $raceModel->getRaces();
        $listView = new ListView();
        $listView->output($drivers, $cars, $tracks, $races);
    }
}