<?php

namespace app\modules\boundaries\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_provincial".
 *
 * @property integer $id_provincial
 * @property string $name
 * @property string $type
 */
class Provincial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_provincial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'required'],
            [['name'], 'string', 'max' => 200],
            [['type'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_provincial' => 'Id Provincial',
            'name' => 'Name',
            'type' => 'Type',
        ];
    }

    public function getAllProvincial()
    {
        return ArrayHelper::map(Provincial::find()->asArray()->all(),'id_provincial','name');
    }
}
