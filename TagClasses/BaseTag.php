<?php

namespace TagClasses;

class BaseTag
{
    public $id = '';
    public $name = '';
    public $value = '';
    public $class = [];
    public $content =[];    

    public function init()
    {
        return "Hello BaseTag";  
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function addClass($class)
    {
        $this->class[] = $class;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function put($content)
    {
        $this->content[] = $content;
    }

    public function addContent($content)
    {
        $this->content[] = $content;
    }
}
