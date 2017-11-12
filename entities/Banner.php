<?php
/**
 * Banner Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Banner Entity Class
 */
class Banner
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  int
     */
    private $cid = 0;

    /**
     * @var  int
     */
    private $type = 0;

    /**
     * @var  string
     */
    private $name = '';

    /**
     * @var  string
     */
    private $alias = '';

    /**
     * @var  int
     */
    private $imptotal = 0;

    /**
     * @var  int
     */
    private $impmade = 0;

    /**
     * @var  int
     */
    private $clicks = 0;

    /**
     * @var  string
     */
    private $clickurl = '';

    /**
     * @var  int
     */
    private $state = 0;

    /**
     * @var  int
     */
    private $catid = 0;

    /**
     * @var  string
     */
    private $description;

    /**
     * @var  string
     */
    private $custombannercode;

    /**
     * @var  bool
     */
    private $sticky = false;

    /**
     * @var  int
     */
    private $ordering = 0;

    /**
     * @var  string
     */
    private $metakey;

    /**
     * @var  string
     */
    private $params;

    /**
     * @var  bool
     */
    private $ownPrefix = false;

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
    private $publishUp = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $publishDown = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $reset = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $language = '';

    /**
     * @var  int
     */
    private $createdBy = 0;

    /**
     * @var  string
     */
    private $createdByAlias = '';

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
    private $version = 1;

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
     * Set the cid value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCid($value)
    {
        return $this->cid = (int)$value;
    }

    /**
     * Set the type value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setType($value)
    {
        return $this->type = (int)$value;
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
     * Set the imptotal value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setImptotal($value)
    {
        return $this->imptotal = (int)$value;
    }

    /**
     * Set the impmade value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setImpmade($value)
    {
        return $this->impmade = (int)$value;
    }

    /**
     * Set the clicks value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setClicks($value)
    {
        return $this->clicks = (int)$value;
    }

    /**
     * Set the clickurl value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setClickurl($value)
    {
        return $this->clickurl = (string)$value;
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
     * Set the catid value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCatid($value)
    {
        return $this->catid = (int)$value;
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
     * Set the custombannercode value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCustombannercode($value)
    {
        return $this->custombannercode = (string)$value;
    }

    /**
     * Set the sticky value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setSticky($value)
    {
        return $this->sticky = (bool)$value;
    }

    /**
     * Set the ordering value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setOrdering($value)
    {
        return $this->ordering = (int)$value;
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

    /**
     * Set the ownPrefix value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setOwnPrefix($value)
    {
        return $this->ownPrefix = (bool)$value;
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
     * Set the publishUp value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPublishUp($value)
    {
        return $this->publishUp = (string)$value;
    }

    /**
     * Set the publishDown value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPublishDown($value)
    {
        return $this->publishDown = (string)$value;
    }

    /**
     * Set the reset value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setReset($value)
    {
        return $this->reset = (string)$value;
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
     * Set the language value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLanguage($value)
    {
        return $this->language = (string)$value;
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
     * Set the version value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setVersion($value)
    {
        return $this->version = (int)$value;
    }
}
