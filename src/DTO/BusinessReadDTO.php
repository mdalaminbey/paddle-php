<?php

namespace MdAlAminBey\Paddle\DTO;

class BusinessReadDTO extends Base
{
    private string $after    = '';
    private string $id       = '';
    private string $order_by = '';
    private int $per_page    = 10;
    private string $search   = '';
    private string $status   = '';

    /**
     * @return mixed
     */
    public function get_after(): string
    {
        return $this->after;
    }

    /**
     * @param string $after
     */
    public function set_after( string $after ): void
    {
        $this->after = $after;
    }

    /**
     * @return mixed
     */
    public function get_id(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function set_id( string $id ): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function get_order_by(): string
    {
        return $this->order_by;
    }

    /**
     * @param string $order_by
     */
    public function set_order_by( string $order_by ): void
    {
        $this->order_by = $order_by;
    }

    /**
     * @return mixed
     */
    public function get_per_page(): int
    {
        return $this->per_page;
    }

    /**
     * @param int $per_page
     */
    public function set_per_page( int $per_page ): void
    {
        $this->per_page = $per_page;
    }

    /**
     * @return mixed
     */
    public function get_search(): string
    {
        return $this->search;
    }

    /**
     * @param string $search
     */
    public function set_search( string $search ): void
    {
        $this->search = $search;
    }

    /**
     * @return mixed
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
