<?php
/**
 * Field Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Field Entity Class
 */
class Field
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
     * @var  int
     */
    private $groupId = 0;

    /**
     * @var  string
     */
    private $title = '';

    /**
     * @var  string
     */
    private $name = '';

    /**
     * @var  string
     */
    private $label = '';

    /**
     * @var  string
     */
    private $defaultValue = '';

    /**
     * @var  string
     */
    private $type = 'text';

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
     * @var  bool
     */
    private $required = true;

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
    private $fieldparams;

    /**
     * @var  string
     */
    private $language = '';

    /**
     * @var  string
     */
    private $createdTime = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $createdUserId = '0';

    /**
     * @var  string
     */
    private $modifiedTime = '0000-00-00 00:00:00';

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
     * Set the groupId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setGroupId($value)
    {
        return $this->groupId = (int)$value;
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
     * Set the label value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLabel($value)
    {
        return $this->label = (string)$value;
    }

    /**
     * Set the defaultValue value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setDefaultValue($value)
    {
        return $this->defaultValue = (string)$value;
    }

    /**
     * Set the type value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setType($value)
    {
        return $this->type = (string)$value;
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
     * Set the required value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setRequired($value)
    {
        return $this->required = (bool)$value;
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
     * Set the fieldparams value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setFieldparams($value)
    {
        return $this->fieldparams = (string)$value;
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
