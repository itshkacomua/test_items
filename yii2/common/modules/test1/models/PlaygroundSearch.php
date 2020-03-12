<?php

namespace common\modules\test1\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\test1\models\Playground;

/**
 * PlaygroundSearch represents the model behind the search form of `common\modules\test1\models\Playground`.
 */
class PlaygroundSearch extends Playground
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'picture', 'description'], 'safe'],
            [['sorting'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Playground::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'sorting' => $this->sorting,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'picture', $this->picture])
            ->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
