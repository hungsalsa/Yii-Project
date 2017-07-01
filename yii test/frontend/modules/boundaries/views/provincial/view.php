<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\boundaries\models\Provincial */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Provincials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provincial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_provincial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_provincial], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_provincial',
            'name',
            'type',
        ],
    ]) ?>

</div>
