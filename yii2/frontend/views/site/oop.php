<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
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
        <textarea id="int"><?= $json?></textarea>
        <textarea id="out"></textarea>
        <div id="out-div"></div>
    </div>
</div>
<?php
$urlGetForm = Url::to(['get-form']);
$script = <<< JS
    $('.body-content').on('click', '#result', function(){
        var int = $('#int').val();
        console.log(int);
        if (int.length > 0) {
            $.ajax({
                url: "{$urlGetForm}",
                method: "POST",
                data: {
                    json : int
                },
                success: function(data) {
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