<?php

namespace backend\controllers;

use Yii;
use backend\models\Branch;
use backend\models\Company;
use backend\models\BranchSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BranchController implements the CRUD actions for Branch model.
 */
class BranchController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Branch models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BranchSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Branch model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Branch model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Branch();

        $company = new Company();
        $allCompany = $company->getAllCompanies();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('create', [
                'model' => $model,
                'allCompany' => $allCompany,
            ]);
        }
    }

    /**
     * Updates an existing Branch model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Branch model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionList($id){
        // count
        $countstates = Branch::find()->where(['branch_status' => '1','company_id'=>(int)$id])->count();
        
        $states = Branch::find()->where(['branch_status' => '1','company_id'=>(int)$id])->all();
        if ($countstates>0) {
            foreach ($states as $value) {
                echo "<option value='".$value->id."'>".$value->branch_name."</option>";
            }
        } else {
            echo "<option>-- chon country--</option>";
        }
    }

    function actionList2($id='')
    {
        $count = Branch::find()
            ->where(['branch_status' => '1','company_id'=>(int)$id])
            ->count();
    echo $count;
        // $countBranches = Branch::find()->where(['branch_status'=>'1'])->count();
        // $branches = Branch::find()->where(['branch_status'=>'1'])->orderBy('branch_name')->all();
        // print_r($branches);die();
        // if($countBranches >0 ){
        //     foreach ($branches as $branch) {
        //         echo "<option value='".$branch->id."'>".$branch->branch_name."</option>";
        //     }
        // }else{
        //     echo "<option>Select a Company</option>";
        // }
    }

    /**
     * Finds the Branch model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Branch the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Branch::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
