<?php

/* @var $this yii\web\View */

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
            <li>Например, я добавлю в JSON поле типа “file” и соответствующий класс для этого типа - и это должно работать без изменения существующего исходного кода</li>
            <li>Неизвестные поля отображать в виде заглушки “Тип поля не известен”</li>
        </ol>
        <div>
            <b>Решение:</b> <button name="result">Получить результат</button>
        </div>

        <textarea id="int">
            {
        “type“: “form”,
        “action”: “/sign-in”,
        “fields”: [
            {
            “type“: “text”,
            “name“: “username”,
            “placeholder“: “User name”
            },
            {
            “type“: “email”
            “name“: “email”,
            “placeholder“: “User email”
            },
            {
            “type“: “password”
            “name“: “password”,
            “placeholder“: “User password”
            },
            {
            “type“: “radio”
            “name“: “remember”,
            “items”: [
            {
            “name“: “Yes”,
            “value“: “yes”
            },
            {
            “name“: “No”,
            “value“: “no”
            }
        ]
        },
        {
        “type: “button”,
        “submit“: true,
        “name“: “action”,
        “value“: “submit”,
        “placeholder“: “Submit form”
        }
        ]
        }
        </textarea>
        <textarea id="out"></textarea>
    </div>
</div>
