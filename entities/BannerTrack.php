<?php
/**
 * BannerTrack Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * BannerTrack Entity Class
 */
class BannerTrack
{
    /**
     * @var  string
     */
    private $trackDate;

    /**
     * @var  int
     */
    private $trackType;

    /**
     * @var  int
     */
    private $bannerId;

    /**
     * @var  int
     */
    private $count = 0;

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
     * Set the trackDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTrackDate($value)
    {
        return $this->trackDate = (string)$value;
    }

    /**
     * Set the trackType value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTrackType($value)
    {
        return $this->trackType = (int)$value;
    }

    /**
     * Set the bannerId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setBannerId($value)
    {
        return $this->bannerId = (int)$value;
    }

    /**
     * Set the count value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCount($value)
    {
        return $this->count = (int)$value;
    }
}
