<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-default"><a href="/test1/default/">Задание</a></button>
            <button type="button" class="btn btn-default"><a href="/test1/default/event">События</a></button>
            <button type="button" class="btn btn-default"><a href="/test1/default/playground">Площадки</a></button>
        </div>

        <h1>Задание!</h1>

        <p class="lead">Реализовать с помощью Yii2/Laravel мини-сайт с афишей событий (фронтэнд с помощью bootstrap
            реализовать).</p>

        <p class="lead">Будем обращать внимание на форматирование кода, размещение логики, читаемость и расширяемость
            кода, использование возможностей фреймворка.</p>
    </div>

    <div class="body-content">
        <h2>Разделы</h2>

        <div>
            1. Административный - авторизация по логину паролю. Необходим для наполнения БД данными (о данных и их
            структуре будет описано далее).
        </div>
        <div>
            2. Публичный - состоит из 3 страниц:
        </div>
        <ol>
            <li>Главная страница со списком ближайших событий (с постраничной навигацией) (внешний вид вот такой -
                https://blackrockdigital.github.io/startbootstrap-3-col-portfolio/, http://joxi.ru/RmzgOXKU0XOBw2.png)
            </li>
            <li>Страница со списком площадок (внешний вид вот такой -
                https://blackrockdigital.github.io/startbootstrap-heroic-features/ (без верхнего блока
                http://joxi.ru/xAeelGNspJlN6A.png, http://joxi.ru/5mdWpkNtk46w7r.png).
            </li>
            <li>На странице площадки отображаются события данной площадки (верх - http://joxi.ru/l2ZV8vnswDeoW2.png,
                ниже список событий как на главной).
            </li>
        </ol>

        <h2>Данные</h2>

        <div class="row">
            <div class="col-lg-4">
                <h2>**Площадка:**</h2>

                <p>- Поля - название, картинка, описание, сортировка (нужно для управления порядком вывода площадок в
                    публичной части сайта)</p>
            </div>
            <div class="col-lg-4">
                <h2>**Шоу:**</h2>

                <p>- Поля - название, картинка, описание.</p>
            </div>
            <div class="col-lg-4">
                <h2>**События:**</h2>

                <p>- Поля - дата, шоу, площадка.</p>
            </div>
        </div>

        <div>> Указанный перечень полей является минимальным и может быть дополнен при необходимости.</div>

    </div>
</div>
