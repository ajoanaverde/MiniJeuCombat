<?php

class Hydratation
{
    private $value;

    public function __construct(array $value)
    {
        
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function hydrate(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->{$method}($value);
            }
        }
    }
}
