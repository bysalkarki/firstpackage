<?php

namespace Bishal\Testpackage\controller;

class TestController
{
    public function __construct()
    {
        // constructor code goes here
    }

    public function renderFakeJson($url)
    {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
            ]
        );
        $response = curl_exec($curl);
        curl_close($curl);

        // Decode the JSON data
        $data = json_decode($response, true);

        // Print the data
        print_r($data);
    }
}
