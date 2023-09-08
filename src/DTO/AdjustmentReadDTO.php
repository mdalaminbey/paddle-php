<?php

namespace MdAlAminBey\Paddle\DTO;

class AdjustmentReadDTO extends Base
{
    private string $action          = '';
    private string $after           = '';
    private string $customer_id     = '';
    private string $order_by        = '';
    private int $per_page           = 10;
    private string $status          = '';
    private string $subscription_id = '';
    private string $transaction_id  = '';
    private string $id              = '';

    public function get_action(): string
    {
        return $this->action;
    }

    public function set_action(string $action): void
    {
        $this->action = $action;
    }

    public function get_after(): string
    {
        return $this->after;
    }

    public function set_after(string $after): void
    {
        $this->after = $after;
    }

    public function get_customer_id(): string
    {
        return $this->customer_id;
    }

    public function set_customer_id(string $customer_id): void
    {
        $this->customer_id = $customer_id;
    }

    public function get_order_by(): string
    {
        return $this->order_by;
    }

    public function set_order_by(string $order_by): void
    {
        $this->order_by = $order_by;
    }

    public function get_per_page(): int
    {
        return $this->per_page;
    }

    public function set_per_page(int $per_page): void
    {
        $this->per_page = $per_page;
    }

    public function get_status(): string
    {
        return $this->status;
    }

    public function set_status(string $status): void
    {
        $this->status = $status;
    }

    public function get_subscription_id(): string
    {
        return $this->subscription_id;
    }

    public function set_subscription_id(string $subscription_id): void
    {
        $this->subscription_id = $subscription_id;
    }

    public function get_transaction_id(): string
    {
        return $this->transaction_id;
    }

    public function set_transaction_id(string $transaction_id): void
    {
        $this->transaction_id = $transaction_id;
    }

    public function get_id(): string
    {
        return $this->id;
    }

    public function set_id(string $id): void
    {
        $this->id = $id;
    }
}
