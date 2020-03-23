<?php

namespace common\components;

use \common\components\Field;

/**
 * Class FieldRadio
 *
 * @package common\components
 */
class FieldButton extends Field
{
    public $submit;
    public $value;

    public function __construct($arr)
    {
        parent::__construct($arr);
        $this->submit = $arr['submit'];
        $this->value = $arr['value'];
    }

    public function output()
    {
        if ($this->submit) {
            return '<input type="submit" name="' . $this->name . '" placeholder="' . $this->placeholder . '" />';
        } else {
            return '<input type="' . $this->type . '" name="' . $this->name . '" placeholder="' . $this->placeholder . '" value="' . $this->value . '" />';
        }

    }
}
