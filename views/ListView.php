<?php
require_once 'views/CarListView.php';
require_once 'views/DriverListView.php';
require_once 'views/TrackListView.php';
require_once 'views/RaceListView.php';

class ListView
{
    public function output($drivers, $cars, $tracks, $races)
    {
        $driverListView = new DriverListView();
        $carListView = new CarListView();
        $driverListView->output($drivers);
        $carListView->output($cars);
        $trackListView = new TrackListView();
        $trackListView->output($tracks);
        $raceListView = new RaceListView();
        $raceListView->output($races);
    }
}