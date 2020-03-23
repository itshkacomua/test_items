<?php
/* @var $this yii\web\View */

use common\modules\test1\models\Event;
use yii\widgets\ListView;

$this->title = 'Start Bootstrap';
?>
<div class="site-index">
    <div class="btn-group jumbotron" role="group" aria-label="...">
        <button type="button" class="btn btn-default"><a href="/test1/default/">Задание</a></button>
        <button type="button" class="btn btn-default"><a href="/test1/default/event">События</a></button>
        <button type="button" class="btn btn-default"><a href="/test1/default/playground">Площадки</a></button>
    </div>

    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>

    <div class="row">
        <?php
        try {
            /** @var Event $model */

            echo ListView::widget([
                'dataProvider' => $model,
                'itemView' => '_block_event',
                'summary' => '',
                'layout' => '{items}</div><div class="row align-items-center">{pager}</div>{summary}',
                'pager' => [
                    'firstPageLabel' => 'First',
                    'lastPageLabel' => 'Last',
                    'prevPageLabel' => '<span class="glyphicon glyphicon-chevron-left"></span>',
                    'nextPageLabel' => '<span class="glyphicon glyphicon-chevron-right"></span>',
                    'maxButtonCount' => 5,
                ],
            ]);

        } catch (Exception $e) {
            echo 'Eventss are not loaded or does not exist.';
        }
        ?>
    </div>
</div>