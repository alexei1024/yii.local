<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vitamine".
 *
 * @property integer $id
 * @property string $name
 * @property integer $barcode
 * @property string $description
 * @property string $condition_vitamine
 * @property integer $weight
 * @property integer $count
 * @property string $date
 * @property integer $color_id
 *
 * @property Color $color
 */
class Vitamine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vitamine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'barcode', 'description', 'condition_vitamine', 'weight', 'count', 'date', 'color_id'], 'required'],
            [['barcode', 'weight', 'count', 'color_id'], 'integer'],
            [['date'], 'safe'],
            [['name', 'description', 'condition_vitamine'], 'string', 'max' => 55],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'barcode' => 'Barcode',
            'description' => 'Description',
            'condition_vitamine' => 'Condition Vitamine',
            'weight' => 'Weight',
            'count' => 'Count',
            'date' => 'Date',
            'color_id' => 'Color ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id' => 'color_id']);
    }
}
