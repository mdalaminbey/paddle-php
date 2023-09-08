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
        $query_parameters = "";

        if ( $dto instanceof PriceReadDTO ) {

            $params = http_build_query( $dto->to_array() );

            if ( !empty( $params ) ) {
                $query_parameters = "?{$params}";
            }
        }

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
    public function update( PriceDTO $dto )
    {
        try {
            $data = $dto->to_array();
            unset( $data['price_id'] );
            $response = $this->api_client()->request( 'PATCH', "prices/{$dto->get_price_id()}", [
                'json' => $data
            ] );

            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $id
     */
    public function get_by_id( string $id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "prices/{$id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
