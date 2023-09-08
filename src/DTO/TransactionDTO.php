<?php

namespace MdAlAminBey\Paddle\DTO;

class TransactionDTO extends Base
{
    private array $items            = [];
    private string $status          = '';
    private string $customer_id     = '';
    private string $address_id      = '';
    private string $business_id     = '';
    private array $custom_data      = [];
    private string $currency_code   = '';
    private string $collection_mode = '';
    private string $discount_id     = '';
    private array $billing_details  = [];
    private array $billing_period   = [];

    public function get_items(): array
    {
        return $this->items;
    }

    public function set_items(array $items): void
    {
        $this->items = $items;
    }

    public function get_status(): string
    {
        return $this->status;
    }

    public function set_status(string $status): void
    {
        $this->status = $status;
    }

    public function get_customer_id(): string
    {
        return $this->customer_id;
    }

    public function set_customer_id(string $customer_id): void
    {
        $this->customer_id = $customer_id;
    }

    public function get_address_id(): string
    {
        return $this->address_id;
    }

    public function set_address_id(string $address_id): void
    {
        $this->address_id = $address_id;
    }

    public function get_business_id(): string
    {
        return $this->business_id;
    }

    public function set_business_id(string $business_id): void
    {
        $this->business_id = $business_id;
    }

    public function get_custom_data(): array
    {
        return $this->custom_data;
    }

    public function set_custom_data(array $custom_data): void
    {
        $this->custom_data = $custom_data;
    }

    public function get_currency_code(): string
    {
        return $this->currency_code;
    }

    public function set_currency_code(string $currency_code): void
    {
        $this->currency_code = $currency_code;
    }

    public function get_collection_mode(): string
    {
        return $this->collection_mode;
    }

    public function set_collection_mode(string $collection_mode): void
    {
        $this->collection_mode = $collection_mode;
    }

    public function get_discount_id(): string
    {
        return $this->discount_id;
    }

    public function set_discount_id(string $discount_id): void
    {
        $this->discount_id = $discount_id;
    }

    public function get_billing_details(): array
    {
        return $this->billing_details;
    }

    public function set_billing_details(array $billing_details): void
    {
        $this->billing_details = $billing_details;
    }

    public function get_billing_period(): array
    {
        return $this->billing_period;
    }

    public function set_billing_period(array $billing_period): void
    {
        $this->billing_period = $billing_period;
    }
}
