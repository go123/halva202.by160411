<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Halva202',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        // ['label' => 'About', 'url' => ['/site/about']],
        // ['label' => 'Contact', 'url' => ['/site/contact']],
		['label' => 'контактные данные', 'url' => ['/site/contactmy']],
		['label' => 'Репетитор', 'url' => 'http://repetitor.github.io/'],
		['label' => 'Сделать сайт', 'url' => 'http://cvr.by/'],
		['label' => 'Английские спикин-клабы в Минске', 'url' => 'http://cvr.by/blog/istorii-uspekha/item/118-english-speaking-clubs-v-minske.html'],
    ];
    if (Yii::$app->user->isGuest) {
        // $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">
			+375 25 6268071 (viber)
			<br>halva202@gmail.com
			<br>
			<a href="http://vk.com/halva202"><img src="/images/icons/vk32.png" title="rss" alt="rss" /></a>
			<a href="https://www.facebook.com/halva202" target="blank"><img src="/images/icons/facebook-32x32.png" title="facebook" alt="facebook" /></a>
			<a href="https://www.youtube.com/channel/UCyYbgYd4iQD3qPlQf5SxZIg" target="blank"><img src="/images/icons/youtube-32x32.png" title="youtube" alt="youtube" /></a>
		</p>
		

        <p class="pull-right">
			&copy; Halva202 <?= date('Y') ?>
		</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
