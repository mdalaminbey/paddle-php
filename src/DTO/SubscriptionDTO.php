<?php

namespace MdAlAminBey\Paddle\DTO;

class SubscriptionDTO extends Base
{
    private string $customer_id            = '';
    private string $address_id             = '';
    private string $business_id            = '';
    private string $currency_code          = '';
    private string $next_billed_at         = '';
    private array $discount                = [];
    private string $collection_mode        = '';
    private array $billing_details         = [];
    private string $scheduled_change       = '';
    private array $items                   = [];
    private array $custom_data             = [];
    private string $proration_billing_mode = '';

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

    public function get_currency_code(): string
    {
        return $this->currency_code;
    }

    public function set_currency_code(string $currency_code): void
    {
        $this->currency_code = $currency_code;
    }

    public function get_next_billed_at(): string
    {
        return $this->next_billed_at;
    }

    public function set_next_billed_at(string $next_billed_at): void
    {
        $this->next_billed_at = $next_billed_at;
    }

    public function get_discount(): array
    {
        return $this->discount;
    }

    public function set_discount(array $discount): void
    {
        $this->discount = $discount;
    }

    public function get_collection_mode(): string
    {
        return $this->collection_mode;
    }

    public function set_collection_mode(string $collection_mode): void
    {
        $this->collection_mode = $collection_mode;
    }

    public function get_billing_details(): array
    {
        return $this->billing_details;
    }

    public function set_billing_details(array $billing_details): void
    {
        $this->billing_details = $billing_details;
    }

    public function get_scheduled_change(): string
    {
        return $this->scheduled_change;
    }

    public function set_scheduled_change(string $scheduled_change): void
    {
        $this->scheduled_change = $scheduled_change;
    }

    public function get_items(): array
    {
        return $this->items;
    }

    public function set_items(array $items): void
    {
        $this->items = $items;
    }

    public function get_custom_data(): array
    {
        return $this->custom_data;
    }

    public function set_custom_data(array $custom_data): void
    {
        $this->custom_data = $custom_data;
    }

    public function get_proration_billing_mode(): string
    {
        return $this->proration_billing_mode;
    }

    public function set_proration_billing_mode(string $proration_billing_mode): void
    {
        $this->proration_billing_mode = $proration_billing_mode;
    }
}
