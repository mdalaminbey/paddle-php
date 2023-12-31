<?php

namespace MdAlAminBey\Paddle\DTO;

class ProductDTO extends Base
{
    private string $name         = '';
    private string $tax_category = '';
    private string $description  = '';
    private string $image_url    = '';
    private array $custom_data   = [];
    private string $status       = '';

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function set_name( string $name )
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function get_tax_category()
    {
        return $this->tax_category;
    }

    /**
     * @param string $tax_category
     */
    public function set_tax_category( string $tax_category )
    {
        $this->tax_category = $tax_category;
    }

    /**
     * @return string
     */
    public function get_description()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function set_description( string $description )
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function get_image_url()
    {
        return $this->image_url;
    }

    /**
     * @param string $image_url
     */
    public function set_image_url( string $image_url )
    {
        $this->image_url = $image_url;
    }

    /**
     * @return array
     */
    public function get_custom_data()
    {
        return $this->custom_data;
    }

    /**
     * @param array $custom_data
     */
    public function set_custom_data( array $custom_data )
    {
        $this->custom_data = $custom_data;
    }

    /**
     * @return string
     */
    public function get_status()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function set_status( string $status )
    {
        $this->status = $status;
    }
}
