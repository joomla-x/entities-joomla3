<?php
/**
 * Schema Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Schema Entity Class
 */
class Schema
{
    /**
     * @var  int
     */
    private $extensionId;

    /**
     * @var  string
     */
    private $versionId;

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
     * Set the extensionId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setExtensionId($value)
    {
        return $this->extensionId = (int)$value;
    }

    /**
     * Set the versionId value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setVersionId($value)
    {
        return $this->versionId = (string)$value;
    }
}
