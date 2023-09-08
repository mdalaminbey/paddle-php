<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\BusinessDTO;
use MdAlAminBey\Paddle\DTO\BusinessReadDTO;

class Business extends Base
{
    /**
     * @return mixed
     */
    public function customer_businesses( string $customer_id, ?BusinessReadDTO $dto = null )
    {
        try {
            $query_parameters = $this->dto_to_query_params( $dto );
            return $this->response( $this->api_client()->request( 'GET', "customers/{$customer_id}/businesses{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param BusinessDTO $dto
     */
    public function create( string $customer_id, BusinessDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'POST', "customers/{$customer_id}/businesses", [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 201 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param BusinessDTO $dto
     */
    public function update( string $customer_id, string $business_id, BusinessDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "customers/{$customer_id}/businesses/{$business_id}", [
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
    public function get_by_id( string $customer_id, string $business_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "customers/{$customer_id}/businesses/{$business_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
