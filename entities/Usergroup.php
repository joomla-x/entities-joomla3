<?php
/**
 * Usergroup Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Usergroup Entity Class
 */
class Usergroup
{
    /**
     * @var  int  Primary Key
     */
    private $id;

    /**
     * @var  int  Adjacency List Reference Id
     */
    private $parentId = 0;

    /**
     * @var  int  Nested set lft.
     */
    private $lft = 0;

    /**
     * @var  int  Nested set rgt.
     */
    private $rgt = 0;

    /**
     * @var  string
     */
    private $title = '';

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
     * Set the lft value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLft($value)
    {
        return $this->lft = (int)$value;
    }

    /**
     * Set the rgt value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setRgt($value)
    {
        return $this->rgt = (int)$value;
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
}
