<?php
class CarModel
{
    private $apiKey = 'Lindsay';
    public function getCars()
    {
        $url = 'https://lab-95a11ac6-8103-422e-af7e-4a8532f40144.australiaeast.cloudapp.azure.com:7065/car';
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

    public function addCar($carData)
    {
        $url = "https://lab-95a11ac6-8103-422e-af7e-4a8532f40144.australiaeast.cloudapp.azure.com:7065/car";

        $jsonData = json_encode($carData);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'X-API-Key: ' . $this->apiKey,
            'Content-Type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
            return false;
        }

        curl_close($ch);

        $result = json_decode($response, true);

        if (isset($result['code']) && $result['code'] == 200) {
            return true;
        }

        return false;
    }

    public function deleteCar($id)
    {
        $url = "https://lab-95a11ac6-8103-422e-af7e-4a8532f40144.australiaeast.cloudapp.azure.com:7065/car/$id";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'X-API-Key: ' . $this->apiKey,
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
            return false;
        }

        curl_close($ch);

        $result = json_decode($response, true);

        if (isset($result['code']) && $result['code'] == 200) {
            return true;
        }

        return false;
    }
}