<?php
/**
 * Article Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Article Entity Class
 */
class Article
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  int  FK to the #__assets table.
     */
    private $assetId = 0;

    /**
     * @var  string
     */
    private $title = '';

    /**
     * @var  string
     */
    private $alias = '';

    /**
     * @var  string
     */
    private $introtext;

    /**
     * @var  string
     */
    private $fulltext;

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
    private $images;

    /**
     * @var  string
     */
    private $urls;

    /**
     * @var  string
     */
    private $attribs;

    /**
     * @var  int
     */
    private $version = 1;

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
    private $metadesc;

    /**
     * @var  int
     */
    private $access = 0;

    /**
     * @var  int
     */
    private $hits = 0;

    /**
     * @var  string
     */
    private $metadata;

    /**
     * @var  int  Set if article is featured.
     */
    private $featured = 0;

    /**
     * @var  string  The language code for the article.
     */
    private $language;

    /**
     * @var  string  A reference to enable linkages to external data sets.
     */
    private $xreference = '';

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
     * Set the assetId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setAssetId($value)
    {
        return $this->assetId = (int)$value;
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
     * Set the introtext value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setIntrotext($value)
    {
        return $this->introtext = (string)$value;
    }

    /**
     * Set the fulltext value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setFulltext($value)
    {
        return $this->fulltext = (string)$value;
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
     * Set the attribs value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setAttribs($value)
    {
        return $this->attribs = (string)$value;
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
}
