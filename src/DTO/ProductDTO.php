<?php

namespace MdAlAminBey\Paddle\DTO;

use stdClass;

class ProductDTO extends Base
{
    private string $product_id;
    private string $name;
    private ?string $description;
    private ?string $image_url;
    private ?stdClass $custom_data;
    private string $tax_category;
    private string $status = "active";

    /**
     * @param string $name
     * @param string $description
     * @param null|string $image_url
     * @param null|stdClass $custom_data
     * @param null|string $tax_category
     */
    public function __construct( string $name, ?string $description = null, ?string $image_url = null, ?stdClass $custom_data = null, string $tax_category = "standard" )
    {
        $this->name         = $name;
        $this->description  = $description;
        $this->image_url    = $image_url;
        $this->custom_data  = $custom_data;
        $this->tax_category = $tax_category;
    }

    /**
     * @return mixed
     */
    public function get_product_id()
    {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     */
    public function set_product_id( string $product_id )
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
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
     * @return mixed
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
     * @return mixed
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
     * @return mixed
     */
    public function get_custom_data()
    {
        return $this->custom_data;
    }

    /**
     * @param stdClass $custom_data
     */
    public function set_custom_data( ?stdClass $custom_data )
    {
        $this->custom_data = $custom_data;
    }

    /**
     * @return mixed
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
     * @return mixed
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
