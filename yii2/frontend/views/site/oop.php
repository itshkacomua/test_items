<?php

/* @var $this yii\web\View */

use common\components\Field;
use common\components\FieldText;
use yii\helpers\Url;

$this->title = 'My Yii Application';

/*$obj =  new FieldText([0 => ["name"=> "Yes","value"=> "yes"],
    1 => ["name"=> "No", "value"=> "no"]]);
echo $obj->get();*/
/*$json1 = str_replace([' ', '\n', '\t'], ['', '', ''], $json);

$arr = json_decode($json1, true);

if (is_string($json) && (is_object($arr) || is_array($arr))) {
    $text = '';

    foreach ($arr AS $name => $item) {
        if (is_array($item) && $name == 'fields') {
            //Yii::$app->form->getInputField($item);
            foreach ($item as $ite) {
                unset($obj);
                switch ($ite['type']) {
                    case 'text':
                        echo 'text';
                        echo '<pre>';print_r($ite);echo '</pre>';
                        $obj =  new FieldText($ite);
                        echo $obj->output();
                        break;
                    case 'email':
                        echo 'email';
                        break;
                    case 'password':
                        echo 'password';
                        //$form = new Field($item);
                        //$this->form_field = $form->get();
                        break;

                    default:
                        $text .= '<div><b>Тип поля не известен</b></div>';
                        break;
                }
            }
        } else if (is_string($item)) {
            Yii::$app->form->input($name, $item);
        }
    }
    return Yii::$app->form->output($text);
}*/
?>
<div class="test-oop">

    <div class="jumbotron">
        <h1>Тестовое задание PHP</h1>

        <p class="lead">Сделать веб-приложение, которое бы рисовало произвольную html форму по заданному JSON макету, например:</p>
    </div>

    <div class="body-content">
        <h2>Требования:</h2>

        <ol>
            <li>Использовать ООП</li>
            <li>Каждое поле в форме - отдельный класс (по полю type)</li>
            <li>Возможность простого добавления новых типов полей</li>
            <li>Например, я добавлю в JSON поле типа "file" и соответствующий класс для этого типа - и это должно работать без изменения существующего исходного кода</li>
            <li>Неизвестные поля отображать в виде заглушки "Тип поля не известен"</li>
        </ol>
        <div>
            <b>Решение:</b> <button id="result">Получить результат</button>
        </div>

        <br>
        <div class="test-oop-header-int">
            <div><b>Входные данные</b></div>
            <div><b>Результат</b></div>
        </div>
        <textarea id="int">
            <?= $json?>
        </textarea>
        <textarea id="out"></textarea>
        <div id="out-div"></div>
    </div>
</div>
<?php
$urlGetForm = Url::to(['get-form']);
$script = <<< JS
    $(document).on('click', '#result', function(){
        var int = $('#int', '.test-oop').text();
        
        if (int.length > 0) {
            $.ajax({
                url: "{$urlGetForm}",
                method: "POST",
                data: {
                    json : int
                },
                success: function(data) {
                    console.log(data);
                    if (data !== false) {
                        $('#out').html(data);
                        $('#out-div').html(data);
                    }
                }
            });            
        }
    });
JS;
$this->registerJs($script, yii\web\View::POS_READY);