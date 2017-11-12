<?php
/**
 * Menu Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Menu Entity Class
 */
class Menu
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  string  The type of menu this item belongs to. FK to #__menu_types.menutype
     */
    private $menutype;

    /**
     * @var  string  The display title of the menu item.
     */
    private $title;

    /**
     * @var  string  The SEF alias of the menu item.
     */
    private $alias;

    /**
     * @var  string
     */
    private $note = '';

    /**
     * @var  string  The computed path of the menu item based on the alias field.
     */
    private $path;

    /**
     * @var  string  The actually link the menu item refers to.
     */
    private $link;

    /**
     * @var  string
     */
    private $type;

    /**
     * @var  int  The published state of the menu link.
     */
    private $published = 0;

    /**
     * @var  int  The parent menu item in the menu tree.
     */
    private $parentId = 1;

    /**
     * @var  int  The relative level in the tree.
     */
    private $level = 0;

    /**
     * @var  int  FK to #__extensions.id
     */
    private $componentId = 0;

    /**
     * @var  int  FK to #__users.id
     */
    private $checkedOut = 0;

    /**
     * @var  string  The time the menu item was checked out.
     */
    private $checkedOutTime = '0000-00-00 00:00:00';

    /**
     * @var  int  The click behaviour of the link.
     */
    private $browserNav = 0;

    /**
     * @var  int  The access level required to view the menu item.
     */
    private $access = 0;

    /**
     * @var  string  The image of the menu item.
     */
    private $img;

    /**
     * @var  int
     */
    private $templateStyleId = 0;

    /**
     * @var  string  JSON encoded data for the menu item.
     */
    private $params;

    /**
     * @var  int  Nested set lft.
     */
    private $lft = 0;

    /**
     * @var  int  Nested set rgt.
     */
    private $rgt = 0;

    /**
     * @var  int  Indicates if this menu item is the home or default page.
     */
    private $home = 0;

    /**
     * @var  string
     */
    private $language = '';

    /**
     * @var  int
     */
    private $clientId = 0;

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
     * Set the menutype value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMenutype($value)
    {
        return $this->menutype = (string)$value;
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
     * Set the alias value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setAlias($value)
    {
        return $this->alias = (string)$value;
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
     * Set the path value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPath($value)
    {
        return $this->path = (string)$value;
    }

    /**
     * Set the link value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLink($value)
    {
        return $this->link = (string)$value;
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
     * Set the published value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setPublished($value)
    {
        return $this->published = (int)$value;
    }

    /**
     * Set the parentId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setParentId($value)
    {
        return $this->parentId = (int)$value;
    }

    /**
     * Set the level value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLevel($value)
    {
        return $this->level = (int)$value;
    }

    /**
     * Set the componentId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setComponentId($value)
    {
        return $this->componentId = (int)$value;
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
     * Set the browserNav value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setBrowserNav($value)
    {
        return $this->browserNav = (int)$value;
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
     * Set the img value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setImg($value)
    {
        return $this->img = (string)$value;
    }

    /**
     * Set the templateStyleId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setTemplateStyleId($value)
    {
        return $this->templateStyleId = (int)$value;
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
     * Set the lft value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setLft($value)
    {
        return $this->lft = (int)$value;
    }

    /**
     * Set the rgt value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setRgt($value)
    {
        return $this->rgt = (int)$value;
    }

    /**
     * Set the home value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setHome($value)
    {
        return $this->home = (int)$value;
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
}
