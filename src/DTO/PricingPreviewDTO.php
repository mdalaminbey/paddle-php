<?php

namespace MdAlAminBey\Paddle\DTO;

class PricingPreviewDTO extends Base
{
    private array $items                = [];
    private string $customer_id         = '';
    private string $address_id          = '';
    private string $business_id         = '';
    private string $currency_code       = '';
    private string $discount_id         = '';
    private array $address              = [];
    private string $customer_ip_address = '';

    public function get_items(): array
    {
        return $this->items;
    }

    public function set_items(array $items): void
    {
        $this->items = $items;
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

    public function get_currency_code(): string
    {
        return $this->currency_code;
    }

    public function set_currency_code(string $currency_code): void
    {
        $this->currency_code = $currency_code;
    }

    public function get_discount_id(): string
    {
        return $this->discount_id;
    }

    public function set_discount_id(string $discount_id): void
    {
        $this->discount_id = $discount_id;
    }

    public function get_address(): array
    {
        return $this->address;
    }

    public function set_address(array $address): void
    {
        $this->address = $address;
    }

    public function get_customer_ip_address(): string
    {
        return $this->customer_ip_address;
    }

    public function set_customer_ip_address(string $customer_ip_address): void
    {
        $this->customer_ip_address = $customer_ip_address;
    }
}
