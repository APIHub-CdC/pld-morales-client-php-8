<?php

namespace PldPmClientePhp\Client\Model;

use \ArrayAccess;
use \PldPmClientePhp\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Persona';
    
    protected static $apihubTypes = [
        'porcentaje' => 'int',
        'rfc' => 'string',
        'fecha_incorporacion' => 'string',
        'lista' => 'string',
        'estatus' => 'string',
        'razon_social' => 'string',
        'fecha_cargo_inicio' => 'string',
        'fecha_cargo_fin' => 'string',
        'tipo_persona' => 'string'
    ];
    
    protected static $apihubFormats = [
        'porcentaje' => null,
        'rfc' => null,
        'fecha_incorporacion' => null,
        'lista' => null,
        'estatus' => null,
        'razon_social' => null,
        'fecha_cargo_inicio' => null,
        'fecha_cargo_fin' => null,
        'tipo_persona' => null
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
        'porcentaje' => 'porcentaje',
        'rfc' => 'rfc',
        'fecha_incorporacion' => 'fechaIncorporacion',
        'lista' => 'lista',
        'estatus' => 'estatus',
        'razon_social' => 'razonSocial',
        'fecha_cargo_inicio' => 'fechaCargoInicio',
        'fecha_cargo_fin' => 'fechaCargoFin',
        'tipo_persona' => 'tipoPersona'
    ];
    
    protected static $setters = [
        'porcentaje' => 'setPorcentaje',
        'rfc' => 'setRfc',
        'fecha_incorporacion' => 'setFechaIncorporacion',
        'lista' => 'setLista',
        'estatus' => 'setEstatus',
        'razon_social' => 'setRazonSocial',
        'fecha_cargo_inicio' => 'setFechaCargoInicio',
        'fecha_cargo_fin' => 'setFechaCargoFin',
        'tipo_persona' => 'setTipoPersona'
    ];
    
    protected static $getters = [
        'porcentaje' => 'getPorcentaje',
        'rfc' => 'getRfc',
        'fecha_incorporacion' => 'getFechaIncorporacion',
        'lista' => 'getLista',
        'estatus' => 'getEstatus',
        'razon_social' => 'getRazonSocial',
        'fecha_cargo_inicio' => 'getFechaCargoInicio',
        'fecha_cargo_fin' => 'getFechaCargoFin',
        'tipo_persona' => 'getTipoPersona'
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
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['fecha_incorporacion'] = isset($data['fecha_incorporacion']) ? $data['fecha_incorporacion'] : null;
        $this->container['lista'] = isset($data['lista']) ? $data['lista'] : null;
        $this->container['estatus'] = isset($data['estatus']) ? $data['estatus'] : null;
        $this->container['razon_social'] = isset($data['razon_social']) ? $data['razon_social'] : null;
        $this->container['fecha_cargo_inicio'] = isset($data['fecha_cargo_inicio']) ? $data['fecha_cargo_inicio'] : null;
        $this->container['fecha_cargo_fin'] = isset($data['fecha_cargo_fin']) ? $data['fecha_cargo_fin'] : null;
        $this->container['tipo_persona'] = isset($data['tipo_persona']) ? $data['tipo_persona'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
  
        if (!is_null($this->container['lista']) && (mb_strlen($this->container['lista']) > 30)) {
            $invalidProperties[] = "invalid value for 'lista', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['lista']) && (mb_strlen($this->container['lista']) < 0)) {
            $invalidProperties[] = "invalid value for 'lista', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['estatus']) && (mb_strlen($this->container['estatus']) > 30)) {
            $invalidProperties[] = "invalid value for 'estatus', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['estatus']) && (mb_strlen($this->container['estatus']) < 0)) {
            $invalidProperties[] = "invalid value for 'estatus', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['razon_social']) && (mb_strlen($this->container['razon_social']) > 40)) {
            $invalidProperties[] = "invalid value for 'razon_social', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['razon_social']) && (mb_strlen($this->container['razon_social']) < 0)) {
            $invalidProperties[] = "invalid value for 'razon_social', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }
    
    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;
        return $this;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {

        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getFechaIncorporacion()
    {
        return $this->container['fecha_incorporacion'];
    }
    
    public function setFechaIncorporacion($fecha_incorporacion)
    {
        $this->container['fecha_incorporacion'] = $fecha_incorporacion;
        return $this;
    }
    
    public function getLista()
    {
        return $this->container['lista'];
    }
    
    public function setLista($lista)
    {
        if (!is_null($lista) && (mb_strlen($lista) > 30)) {
            throw new \InvalidArgumentException('invalid length for $lista when calling Persona., must be smaller than or equal to 30.');
        }
        if (!is_null($lista) && (mb_strlen($lista) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lista when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['lista'] = $lista;
        return $this;
    }
    
    public function getEstatus()
    {
        return $this->container['estatus'];
    }
    
    public function setEstatus($estatus)
    {
        if (!is_null($estatus) && (mb_strlen($estatus) > 30)) {
            throw new \InvalidArgumentException('invalid length for $estatus when calling Persona., must be smaller than or equal to 30.');
        }
        if (!is_null($estatus) && (mb_strlen($estatus) < 0)) {
            throw new \InvalidArgumentException('invalid length for $estatus when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['estatus'] = $estatus;
        return $this;
    }
    
    public function getRazonSocial()
    {
        return $this->container['razon_social'];
    }
    
    public function setRazonSocial($razon_social)
    {
        if (!is_null($razon_social) && (mb_strlen($razon_social) > 40)) {
            throw new \InvalidArgumentException('invalid length for $razon_social when calling Persona., must be smaller than or equal to 40.');
        }
        if (!is_null($razon_social) && (mb_strlen($razon_social) < 0)) {
            throw new \InvalidArgumentException('invalid length for $razon_social when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['razon_social'] = $razon_social;
        return $this;
    }
    
    public function getFechaCargoInicio()
    {
        return $this->container['fecha_cargo_inicio'];
    }
    
    public function setFechaCargoInicio($fecha_cargo_inicio)
    {
        $this->container['fecha_cargo_inicio'] = $fecha_cargo_inicio;
        return $this;
    }
    
    public function getFechaCargoFin()
    {
        return $this->container['fecha_cargo_fin'];
    }
    
    public function setFechaCargoFin($fecha_cargo_fin)
    {
        $this->container['fecha_cargo_fin'] = $fecha_cargo_fin;
        return $this;
    }
    
    public function getTipoPersona()
    {
        return $this->container['tipo_persona'];
    }
    
    public function setTipoPersona($tipo_persona)
    {
        $this->container['tipo_persona'] = $tipo_persona;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
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
