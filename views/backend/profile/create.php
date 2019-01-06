<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\profil\models\Profile */

$this->title = 'Create Profile';
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
    .btn-purple{background-color:#8A2BE2;color:#FFF;}
    .btn-black:hover{color:#FFF;};
</style>
<div class="profile-create">

    <h1><?= Html::encode($this->title) ?></h1>
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>