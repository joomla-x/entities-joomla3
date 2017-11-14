<?php
/**
 * Module Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Module Entity Class
 */
class Module
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
    private $note = '';

    /**
     * @var  string
     */
    private $content = '';

    /**
     * @var  int
     */
    private $ordering = 0;

    /**
     * @var  string
     */
    private $position = '';

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
     * @var  bool
     */
    private $published = false;

    /**
     * @var  string
     */
    private $module = NULL;

    /**
     * @var  int
     */
    private $access = 0;

    /**
     * @var  int
     */
    private $showtitle = 1;

    /**
     * @var  string
     */
    private $params;

    /**
     * @var  int
     */
    private $clientId = 0;

    /**
     * @var  string
     */
    private $language;

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
     * Set the content value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setContent($value)
    {
        return $this->content = (string)$value;
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
     * Set the position value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPosition($value)
    {
        return $this->position = (string)$value;
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
     * Set the module value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setModule($value)
    {
        return $this->module = (string)$value;
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
     * Set the showtitle value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setShowtitle($value)
    {
        return $this->showtitle = (int)$value;
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
}
