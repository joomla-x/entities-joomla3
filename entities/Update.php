<?php
/**
 * Update Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Update Entity Class
 */
class Update
{
    /**
     * @var  int
     */
    private $updateId;

    /**
     * @var  int
     */
    private $updateSiteId = 0;

    /**
     * @var  int
     */
    private $extensionId = 0;

    /**
     * @var  string
     */
    private $name = '';

    /**
     * @var  string
     */
    private $description;

    /**
     * @var  string
     */
    private $element = '';

    /**
     * @var  string
     */
    private $type = '';

    /**
     * @var  string
     */
    private $folder = '';

    /**
     * @var  int
     */
    private $clientId = 0;

    /**
     * @var  string
     */
    private $version = '';

    /**
     * @var  string
     */
    private $data;

    /**
     * @var  string
     */
    private $detailsurl;

    /**
     * @var  string
     */
    private $infourl;

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
     * Set the updateId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUpdateId($value)
    {
        return $this->updateId = (int)$value;
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
     * Set the description value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setDescription($value)
    {
        return $this->description = (string)$value;
    }

    /**
     * Set the element value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setElement($value)
    {
        return $this->element = (string)$value;
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
     * Set the folder value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setFolder($value)
    {
        return $this->folder = (string)$value;
    }

    /**
     * Set the clientId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setClientId($value)
    {
        return $this->clientId = (int)$value;
    }

    /**
     * Set the version value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setVersion($value)
    {
        return $this->version = (string)$value;
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
     * Set the detailsurl value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setDetailsurl($value)
    {
        return $this->detailsurl = (string)$value;
    }

    /**
     * Set the infourl value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setInfourl($value)
    {
        return $this->infourl = (string)$value;
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
