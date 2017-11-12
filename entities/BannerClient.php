<?php
/**
 * BannerClient Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * BannerClient Entity Class
 */
class BannerClient
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  string
     */
    private $name = '';

    /**
     * @var  string
     */
    private $contact = '';

    /**
     * @var  string
     */
    private $email = '';

    /**
     * @var  string
     */
    private $extrainfo;

    /**
     * @var  int
     */
    private $state = 0;

    /**
     * @var  int
     */
    private $checkedOut = 0;

    /**
     * @var  string
     */
    private $checkedOutTime = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $metakey;

    /**
     * @var  int
     */
    private $ownPrefix = 0;

    /**
     * @var  string
     */
    private $metakeyPrefix = '';

    /**
     * @var  int
     */
    private $purchaseType = -1;

    /**
     * @var  int
     */
    private $trackClicks = -1;

    /**
     * @var  int
     */
    private $trackImpressions = -1;

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
     * Set the contact value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setContact($value)
    {
        return $this->contact = (string)$value;
    }

    /**
     * Set the email value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setEmail($value)
    {
        return $this->email = (string)$value;
    }

    /**
     * Set the extrainfo value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setExtrainfo($value)
    {
        return $this->extrainfo = (string)$value;
    }

    /**
     * Set the state value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setState($value)
    {
        return $this->state = (int)$value;
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
     * Set the metakey value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMetakey($value)
    {
        return $this->metakey = (string)$value;
    }

    /**
     * Set the ownPrefix value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setOwnPrefix($value)
    {
        return $this->ownPrefix = (int)$value;
    }

    /**
     * Set the metakeyPrefix value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMetakeyPrefix($value)
    {
        return $this->metakeyPrefix = (string)$value;
    }

    /**
     * Set the purchaseType value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setPurchaseType($value)
    {
        return $this->purchaseType = (int)$value;
    }

    /**
     * Set the trackClicks value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTrackClicks($value)
    {
        return $this->trackClicks = (int)$value;
    }

    /**
     * Set the trackImpressions value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTrackImpressions($value)
    {
        return $this->trackImpressions = (int)$value;
    }
}
