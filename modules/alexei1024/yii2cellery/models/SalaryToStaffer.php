<?php

namespace app\modules\alexei1024\yii2cellery\models;

use Yii;

/**
 * This is the model class for table "salary_to_staffer".
 *
 * @property integer $id
 * @property integer $staffer_id
 * @property integer $sold
 */
class SalaryToStaffer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'salary_to_staffer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staffer_id', 'sold'], 'required'],
            [['staffer_id', 'sold'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staffer_id' => 'Staffer ID',
            'sold' => 'Sold',
        ];
    }
}
