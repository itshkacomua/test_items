<?php

namespace common\components;

use \common\components\Field;

/**
 * Class FieldTextarea
 *
 * @package common\components
 */
class FieldTextarea extends Field
{
    public $rows;
    public $cols;
    public function __construct($arr)
    {
        parent::__construct($arr);
        $this->rows = $arr['rows'];
        $this->cols = $arr['cols'];
    }

    public function output()
    {
        return '<div id="' . $this->name .'"><textarea rows="' . $this->rows . '" cols="' . $this->cols . '" name="' . $this->name . '"></textarea>';
    }
}
