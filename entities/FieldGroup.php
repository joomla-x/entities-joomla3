<?php
/**
 * FieldGroup Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * FieldGroup Entity Class
 */
class FieldGroup
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  int
     */
    private $assetId = 0;

    /**
     * @var  string
     */
    private $context = '';

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
    private $description;

    /**
     * @var  bool
     */
    private $state = true;

    /**
     * @var  int
     */
    private $checkedOut = '0';

    /**
     * @var  string
     */
    private $checkedOutTime = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $ordering = '0';

    /**
     * @var  string
     */
    private $params;

    /**
     * @var  string
     */
    private $language = '';

    /**
     * @var  string
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $createdBy = '0';

    /**
     * @var  string
     */
    private $modified = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $modifiedBy = '0';

    /**
     * @var  int
     */
    private $access = '1';

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
     * Set the context value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setContext($value)
    {
        return $this->context = (string)$value;
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
     * Set the state value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setState($value)
    {
        return $this->state = (bool)$value;
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
}
