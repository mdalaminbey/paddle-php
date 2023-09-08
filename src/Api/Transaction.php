<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\TransactionDTO;
use MdAlAminBey\Paddle\DTO\TransactionReadDTO;

class Transaction extends Base
{
    /**
     * @return mixed
     */
    public function get( ?TransactionReadDTO $dto = null )
    {
        try {
            $query_parameters = $this->dto_to_query_params( $dto );
            return $this->response( $this->api_client()->request( 'GET', "transactions{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param TransactionDTO $dto
     */
    public function create( TransactionDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'POST', 'transactions', [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param TransactionDTO $dto
     */
    public function update( string $transaction_id, TransactionDTO $dto )
    {
        try {
            $response = $this->api_client()->request( 'PATCH', "transactions/{$transaction_id}", [
                'json' => $dto->to_array()
            ] );

            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $transaction_id
     */
    public function get_by_id( string $transaction_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "transactions/{$transaction_id}" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $transaction_id
     */
    public function get_invoice_pdf( string $transaction_id )
    {
        try {
            $response = $this->api_client()->request( 'GET', "transactions/{$transaction_id}/invoice" );
            return $this->response( $response, 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
