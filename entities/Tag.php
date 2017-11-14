<?php
/**
 * Tag Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Tag Entity Class
 */
class Tag
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
     * @var  int
     */
    private $lft = 0;

    /**
     * @var  int
     */
    private $rgt = 0;

    /**
     * @var  int
     */
    private $level = 0;

    /**
     * @var  string
     */
    private $path = '';

    /**
     * @var  string
     */
    private $title;

    /**
     * @var  string
     */
    private $alias = '';

    /**
     * @var  string
     */
    private $note = '';

    /**
     * @var  string
     */
    private $description;

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
    private $access = 0;

    /**
     * @var  string
     */
    private $params;

    /**
     * @var  string  The meta description for the page.
     */
    private $metadesc;

    /**
     * @var  string  The meta keywords for the page.
     */
    private $metakey;

    /**
     * @var  string  JSON encoded metadata properties.
     */
    private $metadata;

    /**
     * @var  int
     */
    private $createdUserId = 0;

    /**
     * @var  string
     */
    private $createdTime = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $createdByAlias = '';

    /**
     * @var  int
     */
    private $modifiedUserId = 0;

    /**
     * @var  string
     */
    private $modifiedTime = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $images;

    /**
     * @var  string
     */
    private $urls;

    /**
     * @var  int
     */
    private $hits = 0;

    /**
     * @var  string
     */
    private $language;

    /**
     * @var  int
     */
    private $version = 1;

    /**
     * @var  string
     */
    private $publishUp = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $publishDown = '0000-00-00 00:00:00';

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
     * Set the level value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLevel($value)
    {
        return $this->level = (int)$value;
    }

    /**
     * Set the path value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPath($value)
    {
        return $this->path = (string)$value;
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
     * Set the note value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setNote($value)
    {
        return $this->note = (string)$value;
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
     * Set the createdUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCreatedUserId($value)
    {
        return $this->createdUserId = (int)$value;
    }

    /**
     * Set the createdTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCreatedTime($value)
    {
        return $this->createdTime = (string)$value;
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
     * Set the modifiedUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setModifiedUserId($value)
    {
        return $this->modifiedUserId = (int)$value;
    }

    /**
     * Set the modifiedTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setModifiedTime($value)
    {
        return $this->modifiedTime = (string)$value;
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

    /**
     * Set the urls value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setUrls($value)
    {
        return $this->urls = (string)$value;
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
}
