<?php
/**
 * FinderLink Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * FinderLink Entity Class
 */
class FinderLink
{
    /**
     * @var  int
     */
    private $linkId;

    /**
     * @var  string
     */
    private $url;

    /**
     * @var  string
     */
    private $route;

    /**
     * @var  string
     */
    private $title = NULL;

    /**
     * @var  string
     */
    private $description = NULL;

    /**
     * @var  string
     */
    private $indexdate = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $md5sum = NULL;

    /**
     * @var  bool
     */
    private $published = true;

    /**
     * @var  int
     */
    private $state = 1;

    /**
     * @var  int
     */
    private $access = 0;

    /**
     * @var  string
     */
    private $language;

    /**
     * @var  string
     */
    private $publishStartDate = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $publishEndDate = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $startDate = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $endDate = '0000-00-00 00:00:00';

    /**
     * @var  float
     */
    private $listPrice = 0;

    /**
     * @var  float
     */
    private $salePrice = 0;

    /**
     * @var  int
     */
    private $typeId;

    /**
     * @var  string
     */
    private $object;

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
     * Set the linkId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLinkId($value)
    {
        return $this->linkId = (int)$value;
    }

    /**
     * Set the url value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setUrl($value)
    {
        return $this->url = (string)$value;
    }

    /**
     * Set the route value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setRoute($value)
    {
        return $this->route = (string)$value;
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
     * Set the indexdate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setIndexdate($value)
    {
        return $this->indexdate = (string)$value;
    }

    /**
     * Set the md5sum value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMd5sum($value)
    {
        return $this->md5sum = (string)$value;
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
     * Set the publishStartDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPublishStartDate($value)
    {
        return $this->publishStartDate = (string)$value;
    }

    /**
     * Set the publishEndDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPublishEndDate($value)
    {
        return $this->publishEndDate = (string)$value;
    }

    /**
     * Set the startDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setStartDate($value)
    {
        return $this->startDate = (string)$value;
    }

    /**
     * Set the endDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setEndDate($value)
    {
        return $this->endDate = (string)$value;
    }

    /**
     * Set the listPrice value
     *
     * @param  float  $value
     *
     * @return float
     */
    protected function setListPrice($value)
    {
        return $this->listPrice = (float)$value;
    }

    /**
     * Set the salePrice value
     *
     * @param  float  $value
     *
     * @return float
     */
    protected function setSalePrice($value)
    {
        return $this->salePrice = (float)$value;
    }

    /**
     * Set the typeId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTypeId($value)
    {
        return $this->typeId = (int)$value;
    }

    /**
     * Set the object value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setObject($value)
    {
        return $this->object = (string)$value;
    }
}
