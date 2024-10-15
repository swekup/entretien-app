<?php

namespace App\Services\Api\Themoviedb;

use App\Services\Api\GuzzleHttpClient;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Lang;

abstract class AbstractCrudService
{
    private string $baseApiUrl;
    private string $token;
    private string $langLocal;
    private string $fullUrl;

    public function __construct(private readonly GuzzleHttpClient $client)
    {
        $this->token = env('THEMOVIEDB_API_KEY');
        $this->baseApiUrl = env('THEMOVIEDB_API_URL');
        $this->langLocal = Lang::locale();
        $this->fullUrl = $this->baseApiUrl . $this->getAdditionalUrl();
    }

    abstract protected function getAdditionalUrl(): string;

    private function getFullUrl(array $params): string
    {
        $url = $this->fullUrl;
        $params['language'] = $this->langLocal;
        $keyFirst = array_key_first($params);

        foreach ($params as $id => $param) {
            $stringBefore = $keyFirst === $id ? '?' : '&';
            $url .= $stringBefore . $id . '=' . $param;
        }

        return $url;
    }

    public function setLangLocal(string $langLocal): void
    {
        $this->langLocal = $langLocal;
    }

    /**
     * @throws GuzzleException
     */
    protected function getData(array $params, string $method = 'GET')
    {
        $url = $this->getFullUrl($params);
        $request = $this->client->request($url, $this->token, $method);

        return json_decode($request->getContents());
    }

    /**
     * @throws GuzzleException
     */
    public function getDataByPage(int $page)
    {
        return $this->getData(['page' => $page]);
    }
}
