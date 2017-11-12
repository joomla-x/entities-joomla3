<?php
/**
 * PostinstallMessage Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * PostinstallMessage Entity Class
 */
class PostinstallMessage
{
    /**
     * @var  int
     */
    private $postinstallMessageId;

    /**
     * @var  int  FK to #__extensions
     */
    private $extensionId = 700;

    /**
     * @var  string  Lang key for the title
     */
    private $titleKey = '';

    /**
     * @var  string  Lang key for description
     */
    private $descriptionKey = '';

    /**
     * @var  string
     */
    private $actionKey = '';

    /**
     * @var  string  Extension holding lang keys
     */
    private $languageExtension = 'com_postinstall';

    /**
     * @var  int
     */
    private $languageClientId = '1';

    /**
     * @var  string
     */
    private $type = 'link';

    /**
     * @var  string  RAD URI to the PHP file containing action method
     */
    private $actionFile = '';

    /**
     * @var  string  Action method name or URL
     */
    private $action = '';

    /**
     * @var  string  RAD URI to file holding display condition method
     */
    private $conditionFile = NULL;

    /**
     * @var  string
     */
    private $conditionMethod = NULL;

    /**
     * @var  string  Version when this message was introduced
     */
    private $versionIntroduced = '3.2.0';

    /**
     * @var  int
     */
    private $enabled = 1;

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
     * Set the postinstallMessageId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setPostinstallMessageId($value)
    {
        return $this->postinstallMessageId = (int)$value;
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
     * Set the titleKey value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTitleKey($value)
    {
        return $this->titleKey = (string)$value;
    }

    /**
     * Set the descriptionKey value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setDescriptionKey($value)
    {
        return $this->descriptionKey = (string)$value;
    }

    /**
     * Set the actionKey value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setActionKey($value)
    {
        return $this->actionKey = (string)$value;
    }

    /**
     * Set the languageExtension value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLanguageExtension($value)
    {
        return $this->languageExtension = (string)$value;
    }

    /**
     * Set the languageClientId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLanguageClientId($value)
    {
        return $this->languageClientId = (int)$value;
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
     * Set the actionFile value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setActionFile($value)
    {
        return $this->actionFile = (string)$value;
    }

    /**
     * Set the action value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setAction($value)
    {
        return $this->action = (string)$value;
    }

    /**
     * Set the conditionFile value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setConditionFile($value)
    {
        return $this->conditionFile = (string)$value;
    }

    /**
     * Set the conditionMethod value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setConditionMethod($value)
    {
        return $this->conditionMethod = (string)$value;
    }

    /**
     * Set the versionIntroduced value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setVersionIntroduced($value)
    {
        return $this->versionIntroduced = (string)$value;
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
}
