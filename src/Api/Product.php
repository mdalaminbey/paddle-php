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
                'json' => [
                    'name'         => $dto->get_name(),
                    'tax_category' => $dto->get_tax_category(),
                    'description'  => $dto->get_description(),
                    'image_url'    => $dto->get_image_url(),
                    'custom_data'  => $dto->get_custom_data()
                ]
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
            $response = $this->api_client()->request( 'PATCH', 'products', [
                'json' => [
                    'product_id'   => $dto->get_product_id(),
                    'name'         => $dto->get_name(),
                    'tax_category' => $dto->get_tax_category(),
                    'description'  => $dto->get_description(),
                    'image_url'    => $dto->get_image_url(),
                    'custom_data'  => $dto->get_custom_data(),
                    'status'       => $dto->get_status()
                ]
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
            return $this->response( $response, 2000 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
