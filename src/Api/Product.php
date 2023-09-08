<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\ProductDTO;

class Product extends Base
{
    /**
     * @return mixed
     */
    public function get()
    {
        try {
            return $this->response( $this->api_client()->request( 'GET', 'products' ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param ProductDTO $dto
     */
    public function create( ProductDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'POST', 'products', [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 201 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param ProductDTO $dto
     */
    public function update( ProductDTO $dto )
    {
        try {
            $data = $dto->to_array();
            unset( $data['product_id'] );
            $response = $this->api_client()->request( 'PATCH', "products/{$dto->get_product_id()}", [
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
            $response = $this->api_client()->request( 'GET', "products/{$id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
