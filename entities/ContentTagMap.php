<?php
/**
 * ContentTagMap Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * ContentTagMap Entity Class
 */
class ContentTagMap
{
    /**
     * @var  string
     */
    private $typeAlias = '';

    /**
     * @var  int  PK from the core content table
     */
    private $coreContentId;

    /**
     * @var  int  PK from the content type table
     */
    private $contentItemId;

    /**
     * @var  int  PK from the tag table
     */
    private $tagId;

    /**
     * @var  int  Date of most recent save for this tag-item
     */
    private $tagDate = 0;

    /**
     * @var  int  PK from the content_type table
     */
    private $typeId;

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
     * Set the typeAlias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTypeAlias($value)
    {
        return $this->typeAlias = (string)$value;
    }

    /**
     * Set the coreContentId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreContentId($value)
    {
        return $this->coreContentId = (int)$value;
    }

    /**
     * Set the contentItemId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setContentItemId($value)
    {
        return $this->contentItemId = (int)$value;
    }

    /**
     * Set the tagId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTagId($value)
    {
        return $this->tagId = (int)$value;
    }

    /**
     * Set the tagDate value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTagDate($value)
    {
        return $this->tagDate = (int)$value;
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
}
