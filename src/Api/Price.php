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
            $data = [
                'description' => $dto->get_description(),
                'product_id'  => $dto->get_product_id(),
                'unit_price'  => $dto->get_unit_price()
            ];

            if ( !empty( $dto->get_billing_cycle() ) ) {
                $data['billing_cycle'] = $dto->get_billing_cycle();
            }

            if ( !empty( $dto->get_trial_period() ) ) {
                $data['trial_period'] = $dto->get_trial_period();
            }

            if ( !empty( $dto->get_tax_mode() ) ) {
                $data['tax_mode'] = $dto->get_tax_mode();
            }

            if ( !empty( $dto->get_unit_price_overrides() ) ) {
                $data['unit_price_overrides'] = $dto->get_unit_price_overrides();
            }

            if ( !empty( $dto->get_quantity() ) ) {
                $data['quantity'] = $dto->get_quantity();
            }

            if ( !empty( $dto->get_custom_data() ) ) {
                $data['custom_data'] = $dto->get_custom_data();
            }

            $response = $this->api_client()->request( 'POST', 'prices', [
                'json' => $data
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
            $data = [
                'description' => $dto->get_description(),
                'product_id'  => $dto->get_product_id(),
                'unit_price'  => $dto->get_unit_price()
            ];

            if ( !empty( $dto->get_billing_cycle() ) ) {
                $data['billing_cycle'] = $dto->get_billing_cycle();
            }

            if ( !empty( $dto->get_trial_period() ) ) {
                $data['trial_period'] = $dto->get_trial_period();
            }

            if ( !empty( $dto->get_tax_mode() ) ) {
                $data['tax_mode'] = $dto->get_tax_mode();
            }

            if ( !empty( $dto->get_unit_price_overrides() ) ) {
                $data['unit_price_overrides'] = $dto->get_unit_price_overrides();
            }

            if ( !empty( $dto->get_quantity() ) ) {
                $data['quantity'] = $dto->get_quantity();
            }

            if ( !empty( $dto->get_custom_data() ) ) {
                $data['custom_data'] = $dto->get_custom_data();
            }

            $response = $this->api_client()->request( 'POST', "prices/{$dto->get_price_id()}", [
                'json' => $data
            ] );

            return $this->response( $response, 201 );
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
