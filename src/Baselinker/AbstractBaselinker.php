<?php
namespace Apsg\Baselinker\Baselinker;

use GuzzleHttp\Client;

class AbstractBaselinker
{
    const BASE_URL = 'https://api.baselinker.com/connector.php';

    /** @var ClientInterface */
    protected $client;

    /** @var token */
    protected $token;

    /** @var string */
    protected $storageId = 'bl_1';

    public function __construct(Client $client, string $token = null)
    {
        $this->client = $client;

        if (is_null($token)) {
            $this->token = config('baselinker.token');
        }

        $this->storageId = config('baselinker.storage_id', 'bl_1');
    }

    public function token()
    {
        return $this->token;
    }

    public function setStorage(string $storageId) : self
    {
        $this->storageId = $storageId;

        return $this;
    }

    protected function storageData() : array
    {
        return [
            'storage_id' => $this->storageId,
        ];
    }

    public function request(string $method, array $params = [])
    {
        return json_decode($this->client->post(self::BASE_URL, [
            'form_params' => [
                'token'      => $this->token,
                'method'     => $method,
                'parameters' => json_encode( $params),
            ],
            'headers'     => [
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ])->getBody()->getContents());
    }
}
