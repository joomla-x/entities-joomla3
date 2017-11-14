<?php
/**
 * UcmHistory Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * UcmHistory Entity Class
 */
class UcmHistory
{
    /**
     * @var  int
     */
    private $versionId;

    /**
     * @var  int
     */
    private $ucmItemId;

    /**
     * @var  int
     */
    private $ucmTypeId;

    /**
     * @var  string  Optional version name
     */
    private $versionNote = '';

    /**
     * @var  string
     */
    private $saveDate = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $editorUserId = 0;

    /**
     * @var  int  Number of characters in this version.
     */
    private $characterCount = 0;

    /**
     * @var  string  SHA1 hash of the version_data column.
     */
    private $sha1Hash = '';

    /**
     * @var  string  json-encoded string of version data
     */
    private $versionData;

    /**
     * @var  int
     */
    private $keepForever;

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
     * Set the versionId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setVersionId($value)
    {
        return $this->versionId = (int)$value;
    }

    /**
     * Set the ucmItemId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUcmItemId($value)
    {
        return $this->ucmItemId = (int)$value;
    }

    /**
     * Set the ucmTypeId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUcmTypeId($value)
    {
        return $this->ucmTypeId = (int)$value;
    }

    /**
     * Set the versionNote value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setVersionNote($value)
    {
        return $this->versionNote = (string)$value;
    }

    /**
     * Set the saveDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSaveDate($value)
    {
        return $this->saveDate = (string)$value;
    }

    /**
     * Set the editorUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setEditorUserId($value)
    {
        return $this->editorUserId = (int)$value;
    }

    /**
     * Set the characterCount value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCharacterCount($value)
    {
        return $this->characterCount = (int)$value;
    }

    /**
     * Set the sha1Hash value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSha1Hash($value)
    {
        return $this->sha1Hash = (string)$value;
    }

    /**
     * Set the versionData value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setVersionData($value)
    {
        return $this->versionData = (string)$value;
    }

    /**
     * Set the keepForever value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setKeepForever($value)
    {
        return $this->keepForever = (int)$value;
    }
}
