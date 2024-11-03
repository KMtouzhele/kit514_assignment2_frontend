<?php
class RaceModel
{
    public function getRaces()
    {
        $url = "https://lab-2105cf46-fd70-4e4b-8ece-4494323c5240.australiaeast.cloudapp.azure.com:7042/race";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
            return [];
        }
        curl_close($ch);
        $data = json_decode($response, true);
        return $data['result'] ?? [];
    }

    public function getLeaderboard($raceId)
    {
        $url = "https://lab-2105cf46-fd70-4e4b-8ece-4494323c5240.australiaeast.cloudapp.azure.com:7042/race/$raceId/leaderboard";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
            return [];
        }
        curl_close($ch);
        $data = json_decode($response, true);
        return $data['result'] ?? [];
    }

    public function getLaps($raceId)
    {
        $url = "https://lab-2105cf46-fd70-4e4b-8ece-4494323c5240.australiaeast.cloudapp.azure.com:7042/race/$raceId/lap";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
            return [];
        }
        curl_close($ch);
        $data = json_decode($response, true);
        return $data['result'] ?? [];
    }

    public function getAwesomeDrivers()
    {
        $url = "https://lab-95a11ac6-8103-422e-af7e-4a8532f40144.australiaeast.cloudapp.azure.com:7065/awesome";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
            return [];
        }
        curl_close($ch);
        $data = json_decode($response, true);
        return $data['result'] ?? [];
    }
}