<?php

namespace app\modules\alexei1024\yii2cellery\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\alexei1024\yii2cellery\models\SalaryToStaffer;

/**
 * SalaryToStafferSearch represents the model behind the search form of `app\modules\alexei1024\yii2cellery\models\SalaryToStaffer`.
 */
class SalaryToStafferSearch extends SalaryToStaffer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'staffer_id', 'sold'], 'integer'],
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
        $query = SalaryToStaffer::find();

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
            'staffer_id' => $this->staffer_id,
            'sold' => $this->sold,
        ]);

        return $dataProvider;
    }
}
