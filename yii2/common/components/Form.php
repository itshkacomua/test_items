<?php

namespace common\components;

use common\components\FieldButton;
use common\components\FieldInterface;
use common\components\FieldText;
use common\components\FieldPassword;
use common\components\FieldEmail;
use common\components\FieldRadio;
use common\components\FieldTextarea;
use Yii;
use yii\base\Component;
use yii\db\Connection;

/**
 * Class Form
 *
 * @package common\components
 */
class Form extends Component
{
    public $form_option = [];
    public $form_field;
    public $error;

    public function __construct($config = [])
    {
        parent::__construct($config);
    }

    public function input(string $key, string $value)
    {
        $this->form_option[$key] = $value;
    }

    public function output($text): string
    {
        $form = '<form ';
        foreach ($this->form_option AS $key => $value) {
            $form .=  $key . '=" ' . $value . '" ';
        }
        $form .= '>' . $this->form_field . '</form>';

        return $form;
    }

    public function getInputField($arr)
    {
        foreach ($arr as $item) {

            unset($obj);
            switch ($item['type']) {
                case 'text':
                    $obj =  new FieldText($item);
                    $this->form_field .= $obj->output();
                    break;
                case 'email':
                    $obj =  new FieldEmail($item);
                    $this->form_field .= $obj->output();
                    break;
                case 'password':
                    $obj =  new FieldPassword($item);
                    $this->form_field .= $obj->output();
                    break;
                case 'radio':
                    $obj =  new FieldRadio($item);
                    $this->form_field .= $obj->output();
                    break;
                case 'button':
                    $obj =  new FieldButton($item);
                    $this->form_field .= $obj->output();
                    break;
                case 'textarea':
                    $obj =  new FieldTextarea($item);
                    $this->form_field .= $obj->output();
                    break;
                default:
                    $this->form_field .= '<div><b>Тип поля не известен</b></div>';
                    break;
            }
        }
    }
}
