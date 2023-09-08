<?php

namespace MdAlAminBey\Paddle\DTO;

class CustomerDTO extends Base
{
    private string $email  = '';
    private string $name   = '';
    private string $locale = '';
    private string $status = '';

    /**
     * @return mixed
     */
    public function get_email(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function set_email( string $email ): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function get_name(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function set_name( string $name ): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function get_locale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function set_locale( string $locale ): void
    {
        $this->locale = $locale;
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
