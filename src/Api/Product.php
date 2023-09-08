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
    public function update( string $product_id, ProductDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "products/{$product_id}", [
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
    public function get_by_id( string $product_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "products/{$product_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
