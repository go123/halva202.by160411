<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LessonTopic */

$this->title = 'Create Lesson Topic';
$this->params['breadcrumbs'][] = ['label' => 'Lesson Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-topic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
