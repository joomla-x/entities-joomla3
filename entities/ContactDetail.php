<?php
/**
 * ContactDetail Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * ContactDetail Entity Class
 */
class ContactDetail
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
    private $alias = '';

    /**
     * @var  string
     */
    private $conPosition = NULL;

    /**
     * @var  string
     */
    private $address;

    /**
     * @var  string
     */
    private $suburb = NULL;

    /**
     * @var  string
     */
    private $state = NULL;

    /**
     * @var  string
     */
    private $country = NULL;

    /**
     * @var  string
     */
    private $postcode = NULL;

    /**
     * @var  string
     */
    private $telephone = NULL;

    /**
     * @var  string
     */
    private $fax = NULL;

    /**
     * @var  string
     */
    private $misc;

    /**
     * @var  string
     */
    private $image = NULL;

    /**
     * @var  string
     */
    private $emailTo = NULL;

    /**
     * @var  bool
     */
    private $defaultCon = false;

    /**
     * @var  bool
     */
    private $published = false;

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
    private $ordering = 0;

    /**
     * @var  string
     */
    private $params;

    /**
     * @var  int
     */
    private $userId = 0;

    /**
     * @var  int
     */
    private $catid = 0;

    /**
     * @var  int
     */
    private $access = 0;

    /**
     * @var  string
     */
    private $mobile = '';

    /**
     * @var  string
     */
    private $webpage = '';

    /**
     * @var  string
     */
    private $sortname1;

    /**
     * @var  string
     */
    private $sortname2;

    /**
     * @var  string
     */
    private $sortname3;

    /**
     * @var  string
     */
    private $language;

    /**
     * @var  string
     */
    private $created = '0000-00-00 00:00:00';

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
     * @var  string
     */
    private $metakey;

    /**
     * @var  string
     */
    private $metadesc;

    /**
     * @var  string
     */
    private $metadata;

    /**
     * @var  int  Set if contact is featured.
     */
    private $featured = 0;

    /**
     * @var  string  A reference to enable linkages to external data sets.
     */
    private $xreference;

    /**
     * @var  string
     */
    private $publishUp = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $publishDown = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $version = 1;

    /**
     * @var  int
     */
    private $hits = 0;

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
     * Set the conPosition value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setConPosition($value)
    {
        return $this->conPosition = (string)$value;
    }

    /**
     * Set the address value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setAddress($value)
    {
        return $this->address = (string)$value;
    }

    /**
     * Set the suburb value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSuburb($value)
    {
        return $this->suburb = (string)$value;
    }

    /**
     * Set the state value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setState($value)
    {
        return $this->state = (string)$value;
    }

    /**
     * Set the country value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCountry($value)
    {
        return $this->country = (string)$value;
    }

    /**
     * Set the postcode value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPostcode($value)
    {
        return $this->postcode = (string)$value;
    }

    /**
     * Set the telephone value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTelephone($value)
    {
        return $this->telephone = (string)$value;
    }

    /**
     * Set the fax value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setFax($value)
    {
        return $this->fax = (string)$value;
    }

    /**
     * Set the misc value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMisc($value)
    {
        return $this->misc = (string)$value;
    }

    /**
     * Set the image value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setImage($value)
    {
        return $this->image = (string)$value;
    }

    /**
     * Set the emailTo value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setEmailTo($value)
    {
        return $this->emailTo = (string)$value;
    }

    /**
     * Set the defaultCon value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setDefaultCon($value)
    {
        return $this->defaultCon = (bool)$value;
    }

    /**
     * Set the published value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setPublished($value)
    {
        return $this->published = (bool)$value;
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
     * Set the userId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUserId($value)
    {
        return $this->userId = (int)$value;
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
     * Set the access value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setAccess($value)
    {
        return $this->access = (int)$value;
    }

    /**
     * Set the mobile value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMobile($value)
    {
        return $this->mobile = (string)$value;
    }

    /**
     * Set the webpage value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setWebpage($value)
    {
        return $this->webpage = (string)$value;
    }

    /**
     * Set the sortname1 value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSortname1($value)
    {
        return $this->sortname1 = (string)$value;
    }

    /**
     * Set the sortname2 value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSortname2($value)
    {
        return $this->sortname2 = (string)$value;
    }

    /**
     * Set the sortname3 value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSortname3($value)
    {
        return $this->sortname3 = (string)$value;
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
     * Set the metadesc value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMetadesc($value)
    {
        return $this->metadesc = (string)$value;
    }

    /**
     * Set the metadata value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMetadata($value)
    {
        return $this->metadata = (string)$value;
    }

    /**
     * Set the featured value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setFeatured($value)
    {
        return $this->featured = (int)$value;
    }

    /**
     * Set the xreference value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setXreference($value)
    {
        return $this->xreference = (string)$value;
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

    /**
     * Set the hits value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setHits($value)
    {
        return $this->hits = (int)$value;
    }
}
