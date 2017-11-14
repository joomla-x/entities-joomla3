<?php
/**
 * Newsfeed Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Newsfeed Entity Class
 */
class Newsfeed
{
    /**
     * @var  int
     */
    private $catid = 0;

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
    private $link = '';

    /**
     * @var  bool
     */
    private $published = false;

    /**
     * @var  int
     */
    private $numarticles = 1;

    /**
     * @var  int
     */
    private $cacheTime = 3600;

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
     * @var  int
     */
    private $rtl = 0;

    /**
     * @var  int
     */
    private $access = 0;

    /**
     * @var  string
     */
    private $language = '';

    /**
     * @var  string
     */
    private $params;

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
     * @var  string
     */
    private $description;

    /**
     * @var  int
     */
    private $version = 1;

    /**
     * @var  int
     */
    private $hits = 0;

    /**
     * @var  string
     */
    private $images;

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
     * Set the link value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLink($value)
    {
        return $this->link = (string)$value;
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
     * Set the numarticles value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setNumarticles($value)
    {
        return $this->numarticles = (int)$value;
    }

    /**
     * Set the cacheTime value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCacheTime($value)
    {
        return $this->cacheTime = (int)$value;
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
     * Set the rtl value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setRtl($value)
    {
        return $this->rtl = (int)$value;
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

    /**
     * Set the images value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setImages($value)
    {
        return $this->images = (string)$value;
    }
}
