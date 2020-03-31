<?php

namespace TagClasses;

use TagClasses\BaseTag;

class Select extends BaseTag
{
	public $tag = "select";

    public function addOption($value, $lable)
    {
        $this->content[] = [
        	'tag' => 'option',
            'value' => $value,
            'lable' => $lable
        ];    
    }
}