<?php

use common\modules\test1\models\Event;
use yii\helpers\Html;

/**
 * @var Event $model
 */
?>
<div class="col-lg-4 col-sm-6">
    <div class="card h-80 img-thumbnail">
        <a href="/test1/default/event?id=<?= Html::encode($model->id) ?>"><img class="card-img-top" src="http://placehold.it/700x400"
                                                        alt="<?= Html::encode($model->show->picture) ?>"></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="/test1/default/event?id=<?= Html::encode($model->id) ?>"><?= Html::encode($model->show->name) ?></a>
            </h4>
            <p class="card-text"><?= Html::encode($model->show->description) ?></p>
        </div>
    </div>
</div>