<?php

namespace MdAlAminBey\Paddle\Api;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\Base as BaseDTO;
use Psr\Http\Message\ResponseInterface;

class Base
{
    protected array $config;
    private Client $client;

    public function __construct()
    {
        $this->config = [
            'base_uri' => 'https://sandbox-api.paddle.com/',
            'headers'  => [
                'Authorization'  => 'Bearer 47c847b2c90b2fa58bb112d87feea0a1c57cc2fc0cda83eafa',
                'Paddle-Version' => 1
            ]
        ];
    }

    /**
     * @return Client
     */
    protected function api_client(): Client
    {
        if ( empty( $this->client ) ) {
            $this->client = new Client( $this->config );
        }

        return $this->client;
    }

    /**
     * @param int $accepted_status_code
     * @param ResponseInterface $response
     * @return array
     */
    protected function response( ResponseInterface $response, int $accepted_status_code )
    {
        $status_code = $response->getStatusCode();
        $body        = $response->getBody()->getContents();
        if ( $accepted_status_code !== $status_code ) {
            throw new Exception( $body, $status_code );
        }
        return json_decode( $body, true );
    }

    /**
     * @param RequestException $response
     */
    protected function throw_exception( RequestException $e )
    {
        $response = $e->getResponse();
        throw new Exception( $response->getBody()->getContents(), $response->getStatusCode() );
    }

    /**
     * @param BaseDTO $dto
     */
    protected function dto_to_query_params( ?BaseDTO $dto = null )
    {
        $query_parameters = "";

        if ( $dto instanceof BaseDTO ) {

            $params = http_build_query( $dto->to_array() );

            if ( !empty( $params ) ) {
                $query_parameters = "?{$params}";
            }
        }

        return $query_parameters;
    }
}
