<?php

namespace backend\models;

use Yii;
use Yii\helpers\ArrayHelper;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $conpany_email
 * @property string $company_address
 * @property string $start_date
 * @property string $end_date
 * @property boolean $company_status
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name'], 'required'],
            [['start_date', 'end_date'], 'safe'],
            [['company_status'], 'boolean'],
            [['company_name'], 'string', 'max' => 255],
            [['conpany_email', 'company_address'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'conpany_email' => 'Conpany Email',
            'company_address' => 'Company Address',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'company_status' => 'Company Status',
        ];
    }

    public function getAllCompanies()
    {
        return ArrayHelper::map(Company::find()->where(['company_status'=>'1'])->orderBy('company_name')->all(),'id','company_name');
    }

    public static function dropdown()
    {
        static $dropdown;
        if($dropdown===null){
            // get all records from database and generate
            $models = static::find()->all();
            foreach ($models as $model) {
                $dropdown[$model->id] = $model->company_name;
            }
        }

        return $dropdown;
    }
}
