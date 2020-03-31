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

    public function addId($id)
    {
        $this->id = $id;
    }

    public function addClass($class)
    {
        $this->class[] = $class;
    }

    public function addName($name)
    {
        $this->name = $name;
    }

    public function addValue($value)
    {
        $this->value = $value;
    }

    public function put($content)
    {
        $this->content[] = $content;
    }
}
