<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\test1\models\Playground */

$this->title = 'Create Playground';
$this->params['breadcrumbs'][] = ['label' => 'Playgrounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="playground-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
