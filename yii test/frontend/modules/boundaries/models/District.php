<?php

namespace app\modules\boundaries\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tbl_district".
 *
 * @property integer $district_id
 * @property string $name
 * @property string $type
 * @property integer $provincial_id
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['provincial_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'district_id' => 'District ID',
            'name' => 'Name',
            'type' => 'Type',
            'provincial_id' => 'Provincial ID',
        ];
    }

    public function getAllDistrict($provincial_id)
    {
        return ArrayHelper::map(District::find()->where(['provincial_id'=>$provincial_id])->asArray()->all(),'district_id','name');
    }
}
