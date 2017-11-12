<?php
/**
 * TemplateStyle Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * TemplateStyle Entity Class
 */
class TemplateStyle
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  string
     */
    private $template = '';

    /**
     * @var  bool
     */
    private $clientId = false;

    /**
     * @var  string
     */
    private $home = 0;

    /**
     * @var  string
     */
    private $title = '';

    /**
     * @var  string
     */
    private $params;

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
     * Set the template value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTemplate($value)
    {
        return $this->template = (string)$value;
    }

    /**
     * Set the clientId value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setClientId($value)
    {
        return $this->clientId = (bool)$value;
    }

    /**
     * Set the home value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setHome($value)
    {
        return $this->home = (string)$value;
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
}
