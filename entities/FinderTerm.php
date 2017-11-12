<?php
/**
 * FinderTerm Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * FinderTerm Entity Class
 */
class FinderTerm
{
    /**
     * @var  int
     */
    private $termId;

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
    private $weight = 0;

    /**
     * @var  string
     */
    private $soundex;

    /**
     * @var  int
     */
    private $links = 0;

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
     * Set the weight value
     *
     * @param  float  $value
     *
     * @return float
     */
    protected function setWeight($value)
    {
        return $this->weight = (float)$value;
    }

    /**
     * Set the soundex value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSoundex($value)
    {
        return $this->soundex = (string)$value;
    }

    /**
     * Set the links value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLinks($value)
    {
        return $this->links = (int)$value;
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
