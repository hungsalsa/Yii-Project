<?php

namespace app\modules\boundaries\controllers;
use app\modules\boundaries\models\Provincial;
use app\modules\boundaries\models\District;
use app\modules\boundaries\models\Ward;



class ProvincedistrictController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $province = new Provincial();

        $allProvince = $province->getAllProvincial();

        return $this->render('index', [
            'allProvince' => $allProvince,
        ]);
    }

    public function actionGetalldistric($provincial_id)
    {
        $district = new District();
        $allDistrict = $district->getAllDistrict($provincial_id);
// print_r($allDistrict);
        return $this->render('distric', [
            'allDistrict' => $allDistrict,
        ]);

    }

}
