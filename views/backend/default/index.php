<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\profil\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
    .btn-purple{background-color:#8A2BE2;color:#FFF;}
    .btn-black:hover{color:#FFF;};
</style>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-purple']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'surname',
            'birthday',
            //'school',
            //'start_date',
            //'graduation_year',
            //'job',
            //'company',
            //'department',
            //'phone_number',
            //'mail_address:ntext',
            //'abilities:ntext',
            //'experiences:ntext',
            //'hobbies:ntext',
            //'link:ntext',
            //'status',
            //'photo',
            //'image_url:url',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
