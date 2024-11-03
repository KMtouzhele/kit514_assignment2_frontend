<?php
require_once 'views/LeaderboardView.php';
require_once 'views/LapsView.php';
require_once 'views/AwesomeView.php';
class RaceController
{
    private $raceModel;
    public function __construct()
    {
        $this->raceModel = new RaceModel();
    }
    public function getLeaderboard($raceId)
    {
        $leaderboard = $this->raceModel->getLeaderboard($raceId);
        $leaderboardView = new LeaderboardView();
        $leaderboardView->output($leaderboard);
    }

    public function getLaps($raceId)
    {
        $laps = $this->raceModel->getLaps($raceId);
        $lapsView = new LapsView();
        $lapsView->output($laps);
    }

    public function getAwesomeDrivers()
    {
        $awesome = $this->raceModel->getAwesomeDrivers();
        $awesomeView = new AwesomeView();
        $awesomeView->output($awesome);
    }
}