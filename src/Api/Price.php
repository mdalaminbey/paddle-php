<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\PriceDTO;
use MdAlAminBey\Paddle\DTO\PriceReadDTO;

class Price extends Base
{
    /**
     * @return mixed
     */
    public function get( ?PriceReadDTO $dto = null )
    {
        $query_parameters = $this->dto_to_query_params( $dto );

        try {
            return $this->response( $this->api_client()->request( 'GET', "prices{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param PriceDTO $dto
     */
    public function create( PriceDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'POST', 'prices', [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 201 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param PriceDTO $dto
     */
    public function update( string $price_id, PriceDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "prices/{$price_id}", [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $id
     */
    public function get_by_id( string $price_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "prices/{$price_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
