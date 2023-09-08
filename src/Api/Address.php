<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\AddressDTO;
use MdAlAminBey\Paddle\DTO\AddressReadDTO;

class Address extends Base
{
    /**
     * @return mixed
     */
    public function customer_addresses( string $customer_id, ?AddressReadDTO $dto )
    {
        try {
            $query_parameters = $this->dto_to_query_params( $dto );
            return $this->response( $this->api_client()->request( 'GET', "customers/{$customer_id}/addresses{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param AddressDTO $dto
     */
    public function create( string $customer_id, string $address_id, AddressDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'POST', "customers/{$customer_id}/addresses", [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 201 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param AddressDTO $dto
     */
    public function update( string $customer_id, string $address_id, AddressDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "customers/{$customer_id}/addresses/{$address_id}", [
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
    public function get_by_id( string $customer_id, string $address_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "customers/{$customer_id}/addresses/{$address_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
