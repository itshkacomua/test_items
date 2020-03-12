<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\test1\models\Playground */

$this->title = 'Update Playground: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Playgrounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="playground-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
