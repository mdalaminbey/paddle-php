<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\CustomerDTO;
use MdAlAminBey\Paddle\DTO\CustomerReadDTO;

class Customer extends Base
{
    /**
     * @return mixed
     */
    public function get( CustomerReadDTO $dto )
    {
        try {
            $query_parameters = $this->dto_to_query_params( $dto );
            return $this->response( $this->api_client()->request( 'GET', "customers{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param CustomerDTO $dto
     */
    public function create( CustomerDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'POST', 'customers', [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 201 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param CustomerDTO $dto
     */
    public function update( string $customer_id, CustomerDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "customers/{$customer_id}", [
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
    public function get_by_id( string $customer_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "customers/{$customer_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
