<?php

namespace PldPmClientePhp\Client\Model;

use \ArrayAccess;
use \PldPmClientePhp\Client\ObjectSerializer;

class Peticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Peticion';
    
    protected static $apihubTypes = [
        'razon_social' => 'string'
    ];
    
    protected static $apihubFormats = [
        'razon_social' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'razon_social' => 'razonSocial'
    ];
    
    protected static $setters = [
        'razon_social' => 'setRazonSocial'
    ];
    
    protected static $getters = [
        'razon_social' => 'getRazonSocial'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['razon_social'] = isset($data['razon_social']) ? $data['razon_social'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['razon_social'] === null) {
            $invalidProperties[] = "'razon_social' can't be null";
        }
        if ((mb_strlen($this->container['razon_social']) > 50)) {
            $invalidProperties[] = "invalid value for 'razon_social', the character length must be smaller than or equal to 50.";
        }
        if ((mb_strlen($this->container['razon_social']) < 0)) {
            $invalidProperties[] = "invalid value for 'razon_social', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRazonSocial()
    {
        return $this->container['razon_social'];
    }
    
    public function setRazonSocial($razon_social)
    {
        if ((mb_strlen($razon_social) > 50)) {
            throw new \InvalidArgumentException('invalid length for $razon_social when calling Peticion., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($razon_social) < 0)) {
            throw new \InvalidArgumentException('invalid length for $razon_social when calling Peticion., must be bigger than or equal to 0.');
        }
        $this->container['razon_social'] = $razon_social;
        return $this;
    }
    
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet(mixed $offset): bool
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
