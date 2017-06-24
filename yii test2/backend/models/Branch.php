<?php

namespace backend\models;

use Yii;
use Yii\helpers\ArrayHelper;

/**
 * This is the model class for table "branch".
 *
 * @property integer $id
 * @property string $branch_name
 * @property integer $company_id
 * @property string $banch_address
 * @property boolean $branch_status
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_name', 'company_id'], 'required'],
            [['company_id'], 'integer'],
            [['branch_status'], 'boolean'],
            [['branch_name', 'banch_address'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branch_name' => 'Branch Name',
            'company_id' => 'Company ID',
            'banch_address' => 'Banch Address',
            'branch_status' => 'Branch Status',
        ];
    }

    public function getAllBranchs()
    {
        return ArrayHelper::map(Branch::find()->where(['branch_status'=>'1'])->orderBy('branch_name')->all(),'id','branch_name');
    }

    public static function dropdown()
    {
        static $dropdown;
        if($dropdown===null){
            // get all records from database and generate
            $models = static::find()->all();
            foreach ($models as $model) {
                $dropdown[$model->id] = $model->branch_name;
            }
        }

        return $dropdown;
    }
}
