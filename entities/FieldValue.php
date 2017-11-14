<?php
/**
 * FieldValue Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * FieldValue Entity Class
 */
class FieldValue
{
    /**
     * @var  int
     */
    private $fieldId;

    /**
     * @var  string
     */
    private $itemId;

    /**
     * @var  string
     */
    private $value = '';

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

        return $this->{$property} = $value;
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
     * Set the fieldId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setFieldId($value)
    {
        return $this->fieldId = (int)$value;
    }

    /**
     * Set the itemId value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setItemId($value)
    {
        return $this->itemId = (string)$value;
    }

    /**
     * Set the value value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setValue($value)
    {
        return $this->value = (string)$value;
    }
}
