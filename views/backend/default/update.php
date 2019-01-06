<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\profil\models\Profile */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style type="text/css">
    .btn-green{background-color:#66CDAA;color:#FFF;}
    .btn-black:hover{color:#FFF;};
</style>
<div class="profile-view">

<h1 style="color:#4B0082" ><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-green']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'name',
            'surname',
            'birthday',
            'school',
            'start_date',
            'graduation_year',
            'job',
            'company',
            'department',
            'phone_number',
            'mail_address:ntext',
            'abilities:ntext',
            'experiences:ntext',
            'hobbies:ntext',
            'link:ntext',
            'photo',
        ],
    ]) ?>
</div>
