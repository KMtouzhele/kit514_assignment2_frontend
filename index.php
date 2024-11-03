<?php
require_once 'controllers/DriverController.php';
require_once 'controllers/CarController.php';
require_once 'controllers/ListController.php';
require_once 'controllers/TrackController.php';
require_once 'controllers/RaceController.php';

$controller = $_GET['controller'] ?? 'list';
$listController = new ListController();

switch ($controller) {
    case 'list':
        $listController->listAll();
        break;
    case 'driver':
        driverRouter();
        break;
    case 'car':
        carRouter();
        break;
    case 'track':
        trackRouter();
        break;
    case 'race':
        raceRouter();
        break;

}


function driverRouter()
{
    $driverController = new DriverController();
    $number = $_GET['number'] ?? null;
    $action = $_GET['action'] ?? null;

    switch ($action) {
        case 'toAdd':
            $driverController->showAddDriver();
            break;
        case 'add':
            $driverController->addDriver();
            break;
        case 'delete':
            $driverController->deleteDriver($number);
        default:
            $listController = new ListController();
            $listController->listAll();
            break;
    }
}

function carRouter()
{
    $carController = new CarController();
    $id = $_GET['id'] ?? null;
    $action = $_GET['action'] ?? null;

    switch ($action) {
        case 'toAdd':
            $carController->showAddCar();
            break;
        case 'add':
            $carController->addCar();
            break;
        case 'delete':
            $carController->deleteCar($id);
            break;
        default:
            $listController = new ListController();
            $listController->listAll();
            break;
    }
}

function trackRouter()
{
    $trackController = new TrackController();
    $id = $_GET['id'] ?? null;
    $action = $_GET['action'] ?? null;

    switch ($action) {
        case 'toAdd':
            $trackController->showAddTrack();
            break;
        case 'add':
            $trackController->addTrack();
            break;
        case 'delete':
            $trackController->deleteTrack($id);
            break;
        default:
            $listController = new ListController();
            $listController->listAll();
            break;
    }
}

function raceRouter()
{
    $raceController = new RaceController();
    $id = $_GET['id'] ?? null;
    $action = $_GET['action'] ?? null;

    switch ($action) {
        case 'leaderboard':
            $raceController->getLeaderboard($id);
            break;
        case 'laps':
            $raceController->getLaps($id);
            break;
        case 'awesome':
            $raceController->getAwesomeDrivers();
            break;
        default:
            $listController = new ListController();
            $listController->listAll();
            break;
    }
}