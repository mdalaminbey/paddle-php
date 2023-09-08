<?php

namespace MdAlAminBey\Paddle\DTO;

class AddressDTO extends Base
{
    private string $country_code = '';
    private string $description  = '';
    private string $first_line   = '';
    private string $second_line  = '';
    private string $city         = '';
    private string $postal_code  = '';
    private string $region       = '';
    private string $status       = '';

    /**
     * @return mixed
     */
    public function get_country_code(): string
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     */
    public function set_country_code( string $country_code ): void
    {
        $this->country_code = $country_code;
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
    public function get_first_line(): string
    {
        return $this->first_line;
    }

    /**
     * @param string $first_line
     */
    public function set_first_line( string $first_line ): void
    {
        $this->first_line = $first_line;
    }

    /**
     * @return mixed
     */
    public function get_second_line(): string
    {
        return $this->second_line;
    }

    /**
     * @param string $second_line
     */
    public function set_second_line( string $second_line ): void
    {
        $this->second_line = $second_line;
    }

    /**
     * @return mixed
     */
    public function get_city(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function set_city( string $city ): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function get_postal_code(): string
    {
        return $this->postal_code;
    }

    /**
     * @param string $postal_code
     */
    public function set_postal_code( string $postal_code ): void
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return mixed
     */
    public function get_region(): string
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function set_region( string $region ): void
    {
        $this->region = $region;
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
