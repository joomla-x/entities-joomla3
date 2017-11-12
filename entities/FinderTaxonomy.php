<?php
/**
 * FinderTaxonomy Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * FinderTaxonomy Entity Class
 */
class FinderTaxonomy
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  int
     */
    private $parentId = 0;

    /**
     * @var  string
     */
    private $title;

    /**
     * @var  bool
     */
    private $state = true;

    /**
     * @var  bool
     */
    private $access = false;

    /**
     * @var  bool
     */
    private $ordering = false;

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
     * Set the parentId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setParentId($value)
    {
        return $this->parentId = (int)$value;
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
     * Set the access value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setAccess($value)
    {
        return $this->access = (bool)$value;
    }

    /**
     * Set the ordering value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setOrdering($value)
    {
        return $this->ordering = (bool)$value;
    }
}
