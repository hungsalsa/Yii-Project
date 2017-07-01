<?php

namespace app\modules\boundaries\models;

use Yii;

/**
 * This is the model class for table "tbl_ward".
 *
 * @property integer $Ward_id
 * @property string $Name
 * @property string $Type
 * @property integer $district_id
 */
class Ward extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_ward';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Ward_id', 'Name', 'Type', 'district_id'], 'required'],
            [['Ward_id', 'district_id'], 'integer'],
            [['Name', 'Type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Ward_id' => 'Ward ID',
            'Name' => 'Name',
            'Type' => 'Type',
            'district_id' => 'District ID',
        ];
    }
}
