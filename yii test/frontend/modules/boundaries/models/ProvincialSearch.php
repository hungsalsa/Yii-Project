<?php

namespace app\modules\boundaries\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\boundaries\models\Provincial;

/**
 * ProvincialSearch represents the model behind the search form about `app\modules\boundaries\models\Provincial`.
 */
class ProvincialSearch extends Provincial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_provincial'], 'integer'],
            [['name', 'type'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Provincial::find();

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
            'id_provincial' => $this->id_provincial,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
