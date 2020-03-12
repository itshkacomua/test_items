<?php
namespace common\modules\test1\controllers;

use common\modules\test1\models\Event;
use common\modules\test1\models\Playground;
use Yii;
use yii\base\InvalidArgumentException;
use yii\data\ActiveDataProvider;
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

    /**
     * Displays homepage.
     *
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionEvent()
    {
        $param = Yii::$app->getRequest()->getQueryParam('id');

        if (empty($param)) {
            $dataProvider = new ActiveDataProvider([
                'query' => Event::find()->with('playground', 'show'),
                'pagination' => [
                    'pageSize' => 6,
                ],
            ]);

            return $this->render('event', [
                'model' => $dataProvider,
            ]);
        } else {
            try {
                $dataProvider = Event::find()->where(['id' => $param])->with('playground', 'show')->one();
            } catch (InvalidArgumentException $e) {
                throw new BadRequestHttpException($e->getMessage());
            }

            return $this->render('_block_event_detail', [
                'model' => $dataProvider
            ]);
        }
    }

    /**
     * Displays playground page.
     *
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionPlayground()
    {
        $param = Yii::$app->getRequest()->getQueryParam('id');

        if (empty($param)) {
            $query = Playground::find();
            $model = $query->orderBy('sorting')
                ->all();
            return $this->render('playground', [
                'model' => $model
            ]);
        } else {
            try {
                $model = Playground::find()->where(['id' => $param])->one();
            } catch (InvalidArgumentException $e) {
                throw new BadRequestHttpException($e->getMessage());
            }

            return $this->render('_block_detail', [
                'model' => $model
            ]);
        }
    }
}
