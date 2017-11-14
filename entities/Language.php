<?php
/**
 * Language Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Language Entity Class
 */
class Language
{
    /**
     * @var  int
     */
    private $langId;

    /**
     * @var  int
     */
    private $assetId = 0;

    /**
     * @var  string
     */
    private $langCode;

    /**
     * @var  string
     */
    private $title;

    /**
     * @var  string
     */
    private $titleNative;

    /**
     * @var  string
     */
    private $sef;

    /**
     * @var  string
     */
    private $image;

    /**
     * @var  string
     */
    private $description;

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
    private $sitename = '';

    /**
     * @var  int
     */
    private $published = 0;

    /**
     * @var  int
     */
    private $access = 0;

    /**
     * @var  int
     */
    private $ordering = 0;

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
     * Set the langId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLangId($value)
    {
        return $this->langId = (int)$value;
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
     * Set the langCode value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLangCode($value)
    {
        return $this->langCode = (string)$value;
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
     * Set the titleNative value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTitleNative($value)
    {
        return $this->titleNative = (string)$value;
    }

    /**
     * Set the sef value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSef($value)
    {
        return $this->sef = (string)$value;
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
     * Set the sitename value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSitename($value)
    {
        return $this->sitename = (string)$value;
    }

    /**
     * Set the published value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setPublished($value)
    {
        return $this->published = (int)$value;
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
}
