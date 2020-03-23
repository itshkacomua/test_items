<?php

namespace common\components;

use common\components\FieldInterface;

/**
 * Class Field
 *
 * @package common\components
 */
class Field implements FieldInterface
{
    public $name;
    public $type;
    public $placeholder;

    public function __construct($arr)
    {
        $this->name = $arr['name'];
        $this->type = $arr['type'];
        if (!empty($arr['placeholder'])) {
            $this->placeholder = $arr['placeholder'];
        }
    }

    public function output()
    {
        return '<div id="' . $this->name .'"><input type="' . $this->type . '" name="' . $this->name . '" placeholder="' . $this->placeholder . '" /></div>';
    }
}
