<?php
/**
 * FinderFilter Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * FinderFilter Entity Class
 */
class FinderFilter
{
    /**
     * @var  int
     */
    private $filterId;

    /**
     * @var  string
     */
    private $title;

    /**
     * @var  string
     */
    private $alias;

    /**
     * @var  bool
     */
    private $state = true;

    /**
     * @var  string
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $createdBy;

    /**
     * @var  string
     */
    private $createdByAlias;

    /**
     * @var  string
     */
    private $modified = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $modifiedBy = 0;

    /**
     * @var  int
     */
    private $checkedOut = 0;

    /**
     * @var  string
     */
    private $checkedOutTime = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $mapCount = 0;

    /**
     * @var  string
     */
    private $data;

    /**
     * @var  string
     */
    private $params;

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
     * Set the filterId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setFilterId($value)
    {
        return $this->filterId = (int)$value;
    }

    /**
     * Set the title value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTitle($value)
    {
        return $this->title = (string)$value;
    }

    /**
     * Set the alias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setAlias($value)
    {
        return $this->alias = (string)$value;
    }

    /**
     * Set the state value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setState($value)
    {
        return $this->state = (bool)$value;
    }

    /**
     * Set the created value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCreated($value)
    {
        return $this->created = (string)$value;
    }

    /**
     * Set the createdBy value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCreatedBy($value)
    {
        return $this->createdBy = (int)$value;
    }

    /**
     * Set the createdByAlias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCreatedByAlias($value)
    {
        return $this->createdByAlias = (string)$value;
    }

    /**
     * Set the modified value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setModified($value)
    {
        return $this->modified = (string)$value;
    }

    /**
     * Set the modifiedBy value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setModifiedBy($value)
    {
        return $this->modifiedBy = (int)$value;
    }

    /**
     * Set the checkedOut value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCheckedOut($value)
    {
        return $this->checkedOut = (int)$value;
    }

    /**
     * Set the checkedOutTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCheckedOutTime($value)
    {
        return $this->checkedOutTime = (string)$value;
    }

    /**
     * Set the mapCount value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setMapCount($value)
    {
        return $this->mapCount = (int)$value;
    }

    /**
     * Set the data value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setData($value)
    {
        return $this->data = (string)$value;
    }

    /**
     * Set the params value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setParams($value)
    {
        return $this->params = (string)$value;
    }
}
