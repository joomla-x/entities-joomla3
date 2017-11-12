<?php
/**
 * FinderTokenAggregate Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * FinderTokenAggregate Entity Class
 */
class FinderTokenAggregate
{
    /**
     * @var  int
     */
    private $termId;

    /**
     * @var  string
     */
    private $mapSuffix;

    /**
     * @var  string
     */
    private $term;

    /**
     * @var  string
     */
    private $stem;

    /**
     * @var  bool
     */
    private $common = false;

    /**
     * @var  bool
     */
    private $phrase = false;

    /**
     * @var  float
     */
    private $termWeight;

    /**
     * @var  bool
     */
    private $context = true;

    /**
     * @var  float
     */
    private $contextWeight;

    /**
     * @var  float
     */
    private $totalWeight;

    /**
     * @var  string
     */
    private $language = '';

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
     * Set the termId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTermId($value)
    {
        return $this->termId = (int)$value;
    }

    /**
     * Set the mapSuffix value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMapSuffix($value)
    {
        return $this->mapSuffix = (string)$value;
    }

    /**
     * Set the term value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTerm($value)
    {
        return $this->term = (string)$value;
    }

    /**
     * Set the stem value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setStem($value)
    {
        return $this->stem = (string)$value;
    }

    /**
     * Set the common value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setCommon($value)
    {
        return $this->common = (bool)$value;
    }

    /**
     * Set the phrase value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setPhrase($value)
    {
        return $this->phrase = (bool)$value;
    }

    /**
     * Set the termWeight value
     *
     * @param  float  $value
     *
     * @return float
     */
    protected function setTermWeight($value)
    {
        return $this->termWeight = (float)$value;
    }

    /**
     * Set the context value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setContext($value)
    {
        return $this->context = (bool)$value;
    }

    /**
     * Set the contextWeight value
     *
     * @param  float  $value
     *
     * @return float
     */
    protected function setContextWeight($value)
    {
        return $this->contextWeight = (float)$value;
    }

    /**
     * Set the totalWeight value
     *
     * @param  float  $value
     *
     * @return float
     */
    protected function setTotalWeight($value)
    {
        return $this->totalWeight = (float)$value;
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
