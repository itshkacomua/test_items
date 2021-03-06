<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Задание!</h1>

        <p class="lead">Используя Freelancehunt API, получить список всех открытых проектов и сохранить его в базу данных. На основании полученных данных отобразить для пользователя страницу, на которой будет отображено:</p>
    </div>

    <div class="body-content">
        <ul>
            <li>
                Таблица открытых проектов в категориях Веб-программирование, PHP и Базы данных:
                <ol>
                    <li>Название проекта со ссылкой на него, бюджет, имя и логин заказчика.</li>
                    <li>Постраничный вывод — 10 проектов на страницу.</li>
                </ol>
            </li>
            <li>
                <ol>Таблица со статистикой всех открытых проектов по навыкам:
                    <li>Навык ➡ количество открытых проектов.</li>
                </ol>
            </li>
            <li>
                <ol>График с распределением всех проектов по бюджету:
                    <li>Pie chart</li>
                    <li>Группы: до 500 грн, 500-1000 грн, 1000-5000 грн, 5000-10000 грн, более 10000 грн.</li>
                </ol>
            </li>
        </ul>
        <h2><i class="glyphicon glyphicon-wrench"></i> Детали реализации</h2>
        <ol>
            <li>Язык на бекенде: PHP 7.2+</li>
            <li>Можно использовать любые готовые библиотеки packagist, но не полный фреймворк из коробки — в проекте должен быть и ваш код тоже</li>
            <li>Сохранять все данные из API в БД не обязательно, только те, которые вам понадобятся.</li>
            <li>Если вам нужно будет конвертировать валюту для пункта 3, можно использовать <noindex><a href="https://api.privatbank.ua/#p24/exchange" rel="nofollow">API Приватбанк</a></noindex>.</li>
            <li>Обратите внимание, что для одного проекта может быть указано несколько навыков.</li>
            <li>Базу данных вы можете выбрать сами (желательно, но совсем необязательно использовать MySQL).</li>
            <li>Отдельный веб-сервер можно не использовать, достаточно <noindex><a href="https://www.php.net/manual/en/features.commandline.webserver.php" rel="nofollow">встроенного в PHP</a></noindex>.</li>
            <li>Готовый код должен быть загружен на Github/Gitlab/Bitbucket.</li>
            <li>Не забудьте про инструкцию по запуску.</li>
            <li>Тесты, без них никак</li>
            <li>Мы рассчитываем, что на задачу вам понадобится до 4 часов — помните, что это тестовое задание.</li>
        </ol>

        <h2><i class="glyphicon glyphicon-paperclip"></i> Полезные ссылки</h2>
        <ol>
            <li><noindex><a href="https://freelancehunt.com/my/api" rel="nofollow">Получения доступа к API</a></noindex></li>
            <li><noindex><a href="https://apidocs.freelancehunt.com/?version=latest" rel="nofollow">API документация</a></noindex></li>
        </ol>
    </div>
</div>
