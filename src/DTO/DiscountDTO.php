<?php

namespace MdAlAminBey\Paddle\DTO;

class DiscountDTO extends Base
{
    private string $discount_id               = '';
    private string $amount                    = '';
    private string $description               = '';
    private string $type                      = '';
    private ?bool $enabled_for_checkout       = null;
    private string $code                      = '';
    private string $currency_code             = '';
    private ?bool $recur                      = null;
    private ?int $maximum_recurring_intervals = null;
    private ?int $usage_limit                 = null;
    private array $restrict_to                = [];
    private string $expires_at                = '';

    /**
     * @return string
     */
    public function get_discount_id(): string
    {
        return $this->discount_id;
    }

    /**
     * @param string $discount_id
     */
    public function set_discount_id( string $discount_id ): void
    {
        $this->discount_id = $discount_id;
    }

    /**
     * @return string
     */
    public function get_amount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function set_amount( string $amount ): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
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
    public function get_type(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function set_type( string $type ): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function get_enabled_for_checkout(): ?bool
    {
        return $this->enabled_for_checkout;
    }

    /**
     * @param bool $enabled_for_checkout
     */
    public function set_enabled_for_checkout( ?bool $enabled_for_checkout ): void
    {
        $this->enabled_for_checkout = $enabled_for_checkout;
    }

    /**
     * @return mixed
     */
    public function get_code(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function set_code( string $code ): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function get_currency_code(): string
    {
        return $this->currency_code;
    }

    /**
     * @param string $currency_code
     */
    public function set_currency_code( string $currency_code ): void
    {
        $this->currency_code = $currency_code;
    }

    /**
     * @return mixed
     */
    public function get_recur(): ?bool
    {
        return $this->recur;
    }

    /**
     * @param bool $recur
     */
    public function set_recur( ?bool $recur ): void
    {
        $this->recur = $recur;
    }

    /**
     * @return mixed
     */
    public function get_maximum_recurring_intervals(): ?int
    {
        return $this->maximum_recurring_intervals;
    }

    /**
     * @param int $maximum_recurring_intervals
     */
    public function set_maximum_recurring_intervals( ?int $maximum_recurring_intervals ): void
    {
        $this->maximum_recurring_intervals = $maximum_recurring_intervals;
    }

    /**
     * @return mixed
     */
    public function get_usage_limit(): ?int
    {
        return $this->usage_limit;
    }

    /**
     * @param int $usage_limit
     */
    public function set_usage_limit( ?int $usage_limit ): void
    {
        $this->usage_limit = $usage_limit;
    }

    /**
     * @return mixed
     */
    public function get_restrict_to(): array
    {
        return $this->restrict_to;
    }

    /**
     * @param array $restrict_to
     */
    public function set_restrict_to( array $restrict_to ): void
    {
        $this->restrict_to = $restrict_to;
    }

    /**
     * @return mixed
     */
    public function get_expires_at(): string
    {
        return $this->expires_at;
    }

    /**
     * @param string $expires_at
     */
    public function set_expires_at( string $expires_at ): void
    {
        $this->expires_at = $expires_at;
    }
}
