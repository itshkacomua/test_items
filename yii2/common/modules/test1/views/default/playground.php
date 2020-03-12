<?php
$this->title = 'Playground';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="btn-group" role="group" aria-label="...">
    <button type="button" class="btn btn-default"><a href="/test1/default/">Задание</a></button>
    <button type="button" class="btn btn-default"><a href="/test1/default/event">События</a></button>
    <button type="button" class="btn btn-default"><a href="/test1/default/playground">Площадки</a></button>
</div>

<div class="site-contact">
    <div class="row text-center">
        <?php foreach ($model as $playground): ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 img-thumbnail">
                    <img class="card-img-top  img-rounded" src="http://placehold.it/500x325"
                                           alt="<?= $playground->picture ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?= $playground->name ?></h4>
                        <p class="card-text"><?= $playground->description ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="/test1/default/playground?id=<?= $playground->id ?>" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>