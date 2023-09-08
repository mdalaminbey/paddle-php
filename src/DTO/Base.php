<?php

namespace MdAlAminBey\Paddle\DTO;

use ReflectionObject;

/**
 * @return mixed
 */
abstract class Base
{
    public function to_array()
    {
        $reflection = new ReflectionObject( $this );
        $properties = $reflection->getProperties();

        $array = [];

        foreach ( $properties as $property ) {
            $property_name  = $property->getName();
            $getter         = "get_{$property_name}";
            $property_value = $this->{$getter}();

            if ( is_bool( $property_value ) || !empty( $property_value ) ) {
                $array[$property_name] = $property_value;
            }
        }

        return $array;
    }
}
