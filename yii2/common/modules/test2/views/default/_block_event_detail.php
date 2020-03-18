<?php

use common\modules\test1\models\Event;
use yii\helpers\Html;

/**
 * @var Event $model
 */
?>
<div class="btn-group jumbotron" role="group" aria-label="...">
    <button type="button" class="btn btn-default"><a href="/test1/default/">Задание</a></button>
    <button type="button" class="btn btn-default"><a href="/test1/default/event">События</a></button>
    <button type="button" class="btn btn-default"><a href="/test1/default/playground">Площадки</a></button>
</div>

<div class="col-lg-8 col-sm-6">
    <img class="card-img-top img-thumbnail" src="http://placehold.it/900x350"
         alt="<?= Html::encode($model->show->picture) ?>">
</div>
<div class="col-lg-4 col-sm-6">
    <h4 class="card-title">
        <?= Html::encode($model->show->name) ?>
    </h4>
    <p class="card-text"><?= Html::encode($model->show->description) ?></p>
</div>