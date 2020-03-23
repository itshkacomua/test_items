<?php

namespace common\components;

use \common\components\Field;

/**
 * Class FieldRadio
 *
 * @package common\components
 */
class FieldRadio extends Field
{
    public $items=[];
    public function __construct($arr)
    {
        parent::__construct($arr);
        $this->items = $arr['items'];
    }

    public function output()
    {
        if (count($this->items)) {
            $radio = '<div id="' . $this->name .'">';
            foreach ($this->items AS $key => $value) {
                $radio .= '<input type="radio" id="' . $this->name . $key . '" name="' . $this->name . '" value="' . $value['value'] . '">
    <label for="' . $this->name . $key . '">' . $value['name'] . '</label>';
            }
            $radio .= '</div>';

            return $radio;
        }
    }
}
