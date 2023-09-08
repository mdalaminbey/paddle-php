<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\DiscountDTO;
use MdAlAminBey\Paddle\DTO\DiscountReadDTO;

class Discount extends Base
{
    /**
     * @return mixed
     */
    public function get( ?DiscountReadDTO $dto = null )
    {
        try {
            $query_parameters = $this->dto_to_query_params( $dto );
            return $this->response( $this->api_client()->request( 'GET', "discounts{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param DiscountDTO $dto
     */
    public function create( DiscountDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'POST', 'discounts', [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param DiscountDTO $dto
     */
    public function update( string $discount_id, DiscountDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "discounts/{$discount_id}", [
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
    public function get_by_id( string $discount_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "discounts/{$discount_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
