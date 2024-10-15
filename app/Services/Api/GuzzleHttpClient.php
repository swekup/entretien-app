<?php

namespace App\Services\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\StreamInterface;

class GuzzleHttpClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * @throws GuzzleException
     */
    public function request(string $url, string $token, string $requestType = 'GET'): StreamInterface
    {
        $response = $this->client->request($requestType, $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'accept' => 'application/json',
            ],
        ]);

        return $response->getBody();
    }
}
