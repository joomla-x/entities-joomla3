<?php
/**
 * UcmContent Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * UcmContent Entity Class
 */
class UcmContent
{
    /**
     * @var  int
     */
    private $coreContentId;

    /**
     * @var  string  FK to the content types table
     */
    private $coreTypeAlias = '';

    /**
     * @var  string
     */
    private $coreTitle = '';

    /**
     * @var  string
     */
    private $coreAlias = '';

    /**
     * @var  string
     */
    private $coreBody = '';

    /**
     * @var  bool
     */
    private $coreState = false;

    /**
     * @var  string
     */
    private $coreCheckedOutTime = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $coreCheckedOutUserId = 0;

    /**
     * @var  int
     */
    private $coreAccess = 0;

    /**
     * @var  string
     */
    private $coreParams = '';

    /**
     * @var  int
     */
    private $coreFeatured = 0;

    /**
     * @var  string  JSON encoded metadata properties.
     */
    private $coreMetadata = '';

    /**
     * @var  int
     */
    private $coreCreatedUserId = 0;

    /**
     * @var  string
     */
    private $coreCreatedByAlias = '';

    /**
     * @var  string
     */
    private $coreCreatedTime = '0000-00-00 00:00:00';

    /**
     * @var  int  Most recent user that modified
     */
    private $coreModifiedUserId = 0;

    /**
     * @var  string
     */
    private $coreModifiedTime = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $coreLanguage = '';

    /**
     * @var  string
     */
    private $corePublishUp = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $corePublishDown = '0000-00-00 00:00:00';

    /**
     * @var  int  ID from the individual type table
     */
    private $coreContentItemId = 0;

    /**
     * @var  int  FK to the #__assets table.
     */
    private $assetId = 0;

    /**
     * @var  string
     */
    private $coreImages = '';

    /**
     * @var  string
     */
    private $coreUrls = '';

    /**
     * @var  int
     */
    private $coreHits = 0;

    /**
     * @var  int
     */
    private $coreVersion = 1;

    /**
     * @var  int
     */
    private $coreOrdering = 0;

    /**
     * @var  string
     */
    private $coreMetakey = '';

    /**
     * @var  string
     */
    private $coreMetadesc = '';

    /**
     * @var  int
     */
    private $coreCatid = 0;

    /**
     * @var  string  A reference to enable linkages to external data sets.
     */
    private $coreXreference = '';

    /**
     * @var  int
     */
    private $coreTypeId = 0;

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
     * Set the coreTypeAlias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreTypeAlias($value)
    {
        return $this->coreTypeAlias = (string)$value;
    }

    /**
     * Set the coreTitle value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreTitle($value)
    {
        return $this->coreTitle = (string)$value;
    }

    /**
     * Set the coreAlias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreAlias($value)
    {
        return $this->coreAlias = (string)$value;
    }

    /**
     * Set the coreBody value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreBody($value)
    {
        return $this->coreBody = (string)$value;
    }

    /**
     * Set the coreState value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setCoreState($value)
    {
        return $this->coreState = (bool)$value;
    }

    /**
     * Set the coreCheckedOutTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreCheckedOutTime($value)
    {
        return $this->coreCheckedOutTime = (string)$value;
    }

    /**
     * Set the coreCheckedOutUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreCheckedOutUserId($value)
    {
        return $this->coreCheckedOutUserId = (int)$value;
    }

    /**
     * Set the coreAccess value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreAccess($value)
    {
        return $this->coreAccess = (int)$value;
    }

    /**
     * Set the coreParams value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreParams($value)
    {
        return $this->coreParams = (string)$value;
    }

    /**
     * Set the coreFeatured value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreFeatured($value)
    {
        return $this->coreFeatured = (int)$value;
    }

    /**
     * Set the coreMetadata value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreMetadata($value)
    {
        return $this->coreMetadata = (string)$value;
    }

    /**
     * Set the coreCreatedUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreCreatedUserId($value)
    {
        return $this->coreCreatedUserId = (int)$value;
    }

    /**
     * Set the coreCreatedByAlias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreCreatedByAlias($value)
    {
        return $this->coreCreatedByAlias = (string)$value;
    }

    /**
     * Set the coreCreatedTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreCreatedTime($value)
    {
        return $this->coreCreatedTime = (string)$value;
    }

    /**
     * Set the coreModifiedUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreModifiedUserId($value)
    {
        return $this->coreModifiedUserId = (int)$value;
    }

    /**
     * Set the coreModifiedTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreModifiedTime($value)
    {
        return $this->coreModifiedTime = (string)$value;
    }

    /**
     * Set the coreLanguage value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreLanguage($value)
    {
        return $this->coreLanguage = (string)$value;
    }

    /**
     * Set the corePublishUp value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCorePublishUp($value)
    {
        return $this->corePublishUp = (string)$value;
    }

    /**
     * Set the corePublishDown value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCorePublishDown($value)
    {
        return $this->corePublishDown = (string)$value;
    }

    /**
     * Set the coreContentItemId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreContentItemId($value)
    {
        return $this->coreContentItemId = (int)$value;
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
     * Set the coreImages value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreImages($value)
    {
        return $this->coreImages = (string)$value;
    }

    /**
     * Set the coreUrls value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreUrls($value)
    {
        return $this->coreUrls = (string)$value;
    }

    /**
     * Set the coreHits value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreHits($value)
    {
        return $this->coreHits = (int)$value;
    }

    /**
     * Set the coreVersion value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreVersion($value)
    {
        return $this->coreVersion = (int)$value;
    }

    /**
     * Set the coreOrdering value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreOrdering($value)
    {
        return $this->coreOrdering = (int)$value;
    }

    /**
     * Set the coreMetakey value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreMetakey($value)
    {
        return $this->coreMetakey = (string)$value;
    }

    /**
     * Set the coreMetadesc value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreMetadesc($value)
    {
        return $this->coreMetadesc = (string)$value;
    }

    /**
     * Set the coreCatid value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreCatid($value)
    {
        return $this->coreCatid = (int)$value;
    }

    /**
     * Set the coreXreference value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCoreXreference($value)
    {
        return $this->coreXreference = (string)$value;
    }

    /**
     * Set the coreTypeId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCoreTypeId($value)
    {
        return $this->coreTypeId = (int)$value;
    }
}
