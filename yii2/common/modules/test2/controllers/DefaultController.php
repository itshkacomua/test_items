<?php
namespace common\modules\test2\controllers;

use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Site controller
 */
class DefaultController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
