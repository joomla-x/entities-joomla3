<?php
/**
 * Extension Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Extension Entity Class
 */
class Extension
{
    /**
     * @var  int
     */
    private $extensionId;

    /**
     * @var  int  Parent package ID for extensions installed as a package.
     */
    private $packageId = 0;

    /**
     * @var  string
     */
    private $name;

    /**
     * @var  string
     */
    private $type;

    /**
     * @var  string
     */
    private $element;

    /**
     * @var  string
     */
    private $folder;

    /**
     * @var  int
     */
    private $clientId;

    /**
     * @var  int
     */
    private $enabled = 0;

    /**
     * @var  int
     */
    private $access = 1;

    /**
     * @var  int
     */
    private $protected = 0;

    /**
     * @var  string
     */
    private $manifestCache;

    /**
     * @var  string
     */
    private $params;

    /**
     * @var  string
     */
    private $customData;

    /**
     * @var  string
     */
    private $systemData;

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
    private $state = 0;

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
     * Set the extensionId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setExtensionId($value)
    {
        return $this->extensionId = (int)$value;
    }

    /**
     * Set the packageId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setPackageId($value)
    {
        return $this->packageId = (int)$value;
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
     * Set the element value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setElement($value)
    {
        return $this->element = (string)$value;
    }

    /**
     * Set the folder value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setFolder($value)
    {
        return $this->folder = (string)$value;
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
     * Set the enabled value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setEnabled($value)
    {
        return $this->enabled = (int)$value;
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
     * Set the protected value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setProtected($value)
    {
        return $this->protected = (int)$value;
    }

    /**
     * Set the manifestCache value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setManifestCache($value)
    {
        return $this->manifestCache = (string)$value;
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
     * Set the customData value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCustomData($value)
    {
        return $this->customData = (string)$value;
    }

    /**
     * Set the systemData value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSystemData($value)
    {
        return $this->systemData = (string)$value;
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
}
