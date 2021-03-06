<?php declare(strict_types=1);

namespace ShipEngine\Util;

/**
 * Expose getters for private properties.
 */
trait Getters
{
    public function __get(string $property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }

        throw new \RuntimeException($property . ' does not exist.');
    }
}
