<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\SubscriptionDTO;
use MdAlAminBey\Paddle\DTO\SubscriptionReadDTO;

class Subscription extends Base
{
    /**
     * @return mixed
     */
    public function get( ?SubscriptionReadDTO $dto = null )
    {
        $query_parameters = $this->dto_to_query_params( $dto );

        try {
            return $this->response( $this->api_client()->request( 'GET', "subscriptions{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param SubscriptionDTO $dto
     */
    public function preview_an_update( string $subscription_id, SubscriptionDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "subscriptions/{$subscription_id}/preview", [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param SubscriptionDTO $dto
     */
    public function update( string $subscription_id, SubscriptionDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "subscriptions/{$subscription_id}", [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $subscription_id
     */
    public function get_transaction_to_update_payment_method( string $subscription_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "subscriptions/{$subscription_id}/update-payment-method-transaction" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $subscription_id
     */
    public function preview_one_time_charge( string $subscription_id, string $effective_from, array $items )
    {
        try {
            $response = $this->api_client()->request( 'POST', "subscriptions/{$subscription_id}/charge/preview", [
                'json' => [
                    'effective_from' => $effective_from,
                    'items'          => $items
                ]
            ] );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $subscription_id
     */
    public function create_one_time_charge( string $subscription_id, string $effective_from, array $items )
    {
        try {
            $response = $this->api_client()->request( 'POST', "subscriptions/{$subscription_id}/charge", [
                'json' => [
                    'effective_from' => $effective_from,
                    'items'          => $items
                ]
            ] );
            return $this->response( $response, 201 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $subscription_id
     */
    public function pause( string $subscription_id, string $effective_from = '', string $resume_at = '' )
    {
        try {
            $response = $this->api_client()->request( 'POST', "subscriptions/{$subscription_id}/pause", [
                'json' => [
                    'effective_from' => $effective_from,
                    'resume_at'      => $resume_at
                ]
            ] );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $subscription_id
     */
    public function resume( string $subscription_id, string $effective_from )
    {
        try {
            $response = $this->api_client()->request( 'POST', "subscriptions/{$subscription_id}/resume", [
                'json' => [
                    'effective_from' => $effective_from
                ]
            ] );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $subscription_id
     */
    public function cancel( string $subscription_id, string $effective_from = '' )
    {
        try {
            $response = $this->api_client()->request( 'POST', "subscriptions/{$subscription_id}/cancel", [
                'json' => [
                    'effective_from' => $effective_from
                ]
            ] );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $subscription_id
     */
    public function get_by_id( string $subscription_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "subscriptions/{$subscription_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
