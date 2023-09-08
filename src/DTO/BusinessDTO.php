<?php

namespace MdAlAminBey\Paddle\DTO;

class BusinessDTO extends Base
{
    private string $name           = '';
    private string $company_number = '';
    private string $tax_identifier = '';
    private array $contacts        = [];

    public function get_name(): string
    {
        return $this->name;
    }

    public function set_name(string $name): void
    {
        $this->name = $name;
    }

    public function get_company_number(): string
    {
        return $this->company_number;
    }

    public function set_company_number(string $company_number): void
    {
        $this->company_number = $company_number;
    }

    public function get_tax_identifier(): string
    {
        return $this->tax_identifier;
    }

    public function set_tax_identifier(string $tax_identifier): void
    {
        $this->tax_identifier = $tax_identifier;
    }

    public function get_contacts(): array
    {
        return $this->contacts;
    }

    public function set_contacts(array $contacts): void
    {
        $this->contacts = $contacts;
    }
}
