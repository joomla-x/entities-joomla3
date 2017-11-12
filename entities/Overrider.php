<?php
/**
 * Overrider Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Overrider Entity Class
 */
class Overrider
{
    /**
     * @var  int  Primary Key
     */
    private $id;

    /**
     * @var  string
     */
    private $constant;

    /**
     * @var  string
     */
    private $string;

    /**
     * @var  string
     */
    private $file;

    /**
     * Redirect assignments through a setter, if available
     *
     * @param  string  $property
     * @param  mixed   $value
     *
     * @return mixed
     */
    public function __set($property, $value)
    {
        $method = 'set' . ucfirst($property);

        if (method_exists($this, $method)) {
            return call_user_func([$this, $method], $value);
        }

        if (property_exists($this, $property)) {
            return $this->{$property} = $value;
        }
        
        throw new PropertyNotFoundException("Property $property not found in " . get_class($this));
    }
    
    /**
     * Getter
     *
     * @param  string  $property
     *
     * @return mixed
     */
    public function __get($property)
    {
        $method = 'get' . ucfirst($property);

        if (method_exists($this, $method)) {
            return call_user_func([$this, $method]);
        }

        if (property_exists($this, $property)) {
            return $this->{$property};
        }
        
        throw new PropertyNotFoundException("Property $property not found in " . get_class($this));
    }
    
    /**
     * Set the id value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setId($value)
    {
        return $this->id = (int)$value;
    }

    /**
     * Set the constant value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setConstant($value)
    {
        return $this->constant = (string)$value;
    }

    /**
     * Set the string value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setString($value)
    {
        return $this->string = (string)$value;
    }

    /**
     * Set the file value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setFile($value)
    {
        return $this->file = (string)$value;
    }
}
