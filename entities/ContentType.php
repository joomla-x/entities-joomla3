<?php
/**
 * ContentType Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * ContentType Entity Class
 */
class ContentType
{
    /**
     * @var  int
     */
    private $typeId;

    /**
     * @var  string
     */
    private $typeTitle = '';

    /**
     * @var  string
     */
    private $typeAlias = '';

    /**
     * @var  string
     */
    private $table = '';

    /**
     * @var  string
     */
    private $rules;

    /**
     * @var  string
     */
    private $fieldMappings;

    /**
     * @var  string
     */
    private $router = '';

    /**
     * @var  string  JSON string for com_contenthistory options
     */
    private $contentHistoryOptions;

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
     * Set the typeId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTypeId($value)
    {
        return $this->typeId = (int)$value;
    }

    /**
     * Set the typeTitle value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTypeTitle($value)
    {
        return $this->typeTitle = (string)$value;
    }

    /**
     * Set the typeAlias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTypeAlias($value)
    {
        return $this->typeAlias = (string)$value;
    }

    /**
     * Set the table value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTable($value)
    {
        return $this->table = (string)$value;
    }

    /**
     * Set the rules value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setRules($value)
    {
        return $this->rules = (string)$value;
    }

    /**
     * Set the fieldMappings value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setFieldMappings($value)
    {
        return $this->fieldMappings = (string)$value;
    }

    /**
     * Set the router value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setRouter($value)
    {
        return $this->router = (string)$value;
    }

    /**
     * Set the contentHistoryOptions value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setContentHistoryOptions($value)
    {
        return $this->contentHistoryOptions = (string)$value;
    }
}
