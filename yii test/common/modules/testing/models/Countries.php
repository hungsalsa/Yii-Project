<?php

namespace common\modules\testing\models;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "countries".
 *
 * @property integer $id
 * @property string $sortname
 * @property string $name
 * @property integer $phonecode
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sortname', 'name', 'phonecode'], 'required'],
            [['phonecode'], 'integer'],
            [['sortname'], 'string', 'max' => 3],
            [['name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sortname' => 'Sortname',
            'name' => 'Name',
            'phonecode' => 'Phonecode',
        ];
    }

    public function getAll_Countries(){
        // get and cache data
        $countries = ArrayHelper::map(Countries::find()->orderBy('name')->all(),'id', 'name');

        return $countries;
    }
}
