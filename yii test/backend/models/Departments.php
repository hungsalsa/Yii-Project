<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $branch_id
 * @property string $department_name
 * @property boolean $department_status
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'branch_id', 'department_name'], 'required'],
            [['company_id', 'branch_id'], 'integer'],
            [['department_status'], 'boolean'],
            [['department_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'branch_id' => 'Branch ID',
            'department_name' => 'Department Name',
            'department_status' => 'Department Status',
        ];
    }
}
