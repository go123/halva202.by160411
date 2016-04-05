<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LessonTopic */

$this->title = 'Update Lesson Topic: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Lesson Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lesson-topic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
