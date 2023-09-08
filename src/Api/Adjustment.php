<?php

namespace MdAlAminBey\Paddle\Api;

use GuzzleHttp\Exception\RequestException;
use MdAlAminBey\Paddle\DTO\AdjustmentReadDTO;

class Adjustment extends Base
{
    /**
     * @return mixed
     */
    public function get( ?AdjustmentReadDTO $dto = null )
    {
        $query_parameters = $this->dto_to_query_params( $dto );

        try {
            return $this->response( $this->api_client()->request( 'GET', "adjustments{$query_parameters}" ), 200 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }

    /**
     * @param string $action
     * @param array $items
     * @param string $reason
     * @param string $transaction_id
     * @return mixed
     */
    public function create( string $action, array $items, string $reason, string $transaction_id )
    {
        try {
            $response = $this->api_client()->request( 'POST', 'adjustments', [
                'json' => [
                    'action'         => $action,
                    'items'          => $items,
                    'reason'         => $reason,
                    'transaction_id' => $transaction_id
                ]
            ] );

            return $this->response( $response, 201 );
        } catch ( RequestException $e ) {
            $this->throw_exception( $e );
        }
    }
}
