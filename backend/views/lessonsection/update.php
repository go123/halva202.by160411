<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LessonSection */

$this->title = 'Update Lesson Section: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Lesson Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lesson-section-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
