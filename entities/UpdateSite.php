<?php
/**
 * UpdateSite Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * UpdateSite Entity Class
 */
class UpdateSite
{
    /**
     * @var  int
     */
    private $updateSiteId;

    /**
     * @var  string
     */
    private $name = '';

    /**
     * @var  string
     */
    private $type = '';

    /**
     * @var  string
     */
    private $location;

    /**
     * @var  int
     */
    private $enabled = 0;

    /**
     * @var  int
     */
    private $lastCheckTimestamp = 0;

    /**
     * @var  string
     */
    private $extraQuery = '';

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
     * Set the updateSiteId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUpdateSiteId($value)
    {
        return $this->updateSiteId = (int)$value;
    }

    /**
     * Set the name value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setName($value)
    {
        return $this->name = (string)$value;
    }

    /**
     * Set the type value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setType($value)
    {
        return $this->type = (string)$value;
    }

    /**
     * Set the location value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLocation($value)
    {
        return $this->location = (string)$value;
    }

    /**
     * Set the enabled value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setEnabled($value)
    {
        return $this->enabled = (int)$value;
    }

    /**
     * Set the lastCheckTimestamp value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLastCheckTimestamp($value)
    {
        return $this->lastCheckTimestamp = (int)$value;
    }

    /**
     * Set the extraQuery value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setExtraQuery($value)
    {
        return $this->extraQuery = (string)$value;
    }
}
