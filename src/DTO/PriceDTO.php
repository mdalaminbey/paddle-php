<?php

namespace MdAlAminBey\Paddle\DTO;

class PriceDTO extends Base
{
    private string $price_id            = '';
    private string $description         = '';
    private string $product_id          = '';
    private array $unit_price           = [];
    private array $billing_cycle        = [];
    private array $trial_period         = [];
    private string $tax_mode            = '';
    private array $unit_price_overrides = [];
    private array $quantity             = [];
    private string $status              = '';
    private array $custom_data          = [];

    /**
     * @return mixed
     */
    public function get_price_id(): string
    {
        return $this->price_id;
    }

    /**
     * @param string $price_id
     */
    public function set_price_id( string $price_id ): void
    {
        $this->price_id = $price_id;
    }

    /**
     * @return mixed
     */
    public function get_description(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function set_description( string $description ): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function get_product_id(): string
    {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     */
    public function set_product_id( string $product_id ): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @return array
     */
    public function get_unit_price(): array
    {
        return $this->unit_price;
    }

    /**
     * @param array $unit_price
     */
    public function set_unit_price( array $unit_price ): void
    {
        $this->unit_price = $unit_price;
    }

    /**
     * @return mixed
     */
    public function get_billing_cycle(): array
    {
        return $this->billing_cycle;
    }

    /**
     * @param array $billing_cycle
     */
    public function set_billing_cycle( array $billing_cycle ): void
    {
        $this->billing_cycle = $billing_cycle;
    }

    /**
     * @return mixed
     */
    public function get_trial_period(): array
    {
        return $this->trial_period;
    }

    /**
     * @param array $trial_period
     */
    public function set_trial_period( array $trial_period ): void
    {
        $this->trial_period = $trial_period;
    }

    /**
     * @return mixed
     */
    public function get_tax_mode(): string
    {
        return $this->tax_mode;
    }

    /**
     * @param string $tax_mode
     */
    public function set_tax_mode( string $tax_mode ): void
    {
        $this->tax_mode = $tax_mode;
    }

    /**
     * @return mixed
     */
    public function get_unit_price_overrides(): array
    {
        return $this->unit_price_overrides;
    }

    /**
     * @param array $unit_price_overrides
     */
    public function set_unit_price_overrides( array $unit_price_overrides ): void
    {
        $this->unit_price_overrides = $unit_price_overrides;
    }

    /**
     * @return mixed
     */
    public function get_quantity(): array
    {
        return $this->quantity;
    }

    /**
     * @param array $quantity
     */
    public function set_quantity( array $quantity ): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function get_custom_data(): array
    {
        return $this->custom_data;
    }

    /**
     * @param array $custom_data
     */
    public function set_custom_data( array $custom_data ): void
    {
        $this->custom_data = $custom_data;
    }

    /**
     * @return string
     */
    public function get_status(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function set_status( string $status ): void
    {
        $this->status = $status;
    }
}
