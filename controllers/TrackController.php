<?php
require_once 'models/TrackModel.php';
require_once 'views/AddTrackView.php';
class TrackController
{
    private $trackModel;
    public function __construct()
    {
        $this->trackModel = new TrackModel();
    }
    public function showAddTrack()
    {
        $addTrackView = new AddTrackView();
        $addTrackView->output();
    }
    public function addTrack()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $trackData = [
                'name' => $_POST['name'],
                'type' => $_POST['type'],
                'laps' => $_POST['laps'],
                'baseLapTime' => $_POST['baseLapTime'],
            ];
            $response = $this->trackModel->addTrack($trackData);
            if ($response) {
                header('Location: index.php?controller=list');
            } else {
                echo 'Failed to add track';
                header('Location: index.php?controller=track&action=toAdd');
            }
        }
    }

    public function deleteTrack($id)
    {
        if (!$id) {
            header('Location: index.php?controller=list');
        }
        $response = $this->trackModel->deleteTrack($id);
        if ($response) {
            header('Location: index.php?controller=list');
        } else {
            echo 'Failed to delete track';
            header('Location: index.php?controller=list');
        }
    }

}