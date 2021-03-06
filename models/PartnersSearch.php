<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Partners;

/**
 * PartnersSearch represents the model behind the search form about `app\models\Partners`.
 */
class PartnersSearch extends Partners
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['logo', 'param1', 'param2', 'param3', 'param4'], 'safe'],
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
        $query = Partners::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'param1', $this->param1])
            ->andFilterWhere(['like', 'param2', $this->param2])
            ->andFilterWhere(['like', 'param3', $this->param3])
            ->andFilterWhere(['like', 'param4', $this->param4]);

        return $dataProvider;
    }
}
