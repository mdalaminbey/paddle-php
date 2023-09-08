<?php

namespace MdAlAminBey\Paddle\DTO;

class TransactionReadDTO extends Base
{
    private string $after           = '';
    private string $billed_at       = '';
    private string $collection_mode = '';
    private string $created_at      = '';
    private string $customer_id     = '';
    private string $id              = '';
    private string $include         = '';
    private string $invoice_number  = '';
    private string $order_by        = '';
    private string $status          = '';
    private string $subscription_id = '';
    private int $per_page           = 10;
    private string $updated_at      = '';

    public function get_after(): string
    {
        return $this->after;
    }

    public function set_after(string $after): void
    {
        $this->after = $after;
    }

    public function get_billed_at(): string
    {
        return $this->billed_at;
    }

    public function set_billed_at(string $billed_at): void
    {
        $this->billed_at = $billed_at;
    }

    public function get_collection_mode(): string
    {
        return $this->collection_mode;
    }

    public function set_collection_mode(string $collection_mode): void
    {
        $this->collection_mode = $collection_mode;
    }

    public function get_created_at(): string
    {
        return $this->created_at;
    }

    public function set_created_at(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function get_customer_id(): string
    {
        return $this->customer_id;
    }

    public function set_customer_id(string $customer_id): void
    {
        $this->customer_id = $customer_id;
    }

    public function get_id(): string
    {
        return $this->id;
    }

    public function set_id(string $id): void
    {
        $this->id = $id;
    }

    public function get_include(): string
    {
        return $this->include;
    }

    public function set_include(string $include): void
    {
        $this->include = $include;
    }

    public function get_invoice_number(): string
    {
        return $this->invoice_number;
    }

    public function set_invoice_number(string $invoice_number): void
    {
        $this->invoice_number = $invoice_number;
    }

    public function get_order_by(): string
    {
        return $this->order_by;
    }

    public function set_order_by(string $order_by): void
    {
        $this->order_by = $order_by;
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

    public function get_per_page(): int
    {
        return $this->per_page;
    }

    public function set_per_page(int $per_page): void
    {
        $this->per_page = $per_page;
    }

    public function get_updated_at(): string
    {
        return $this->updated_at;
    }

    public function set_updated_at(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
}
