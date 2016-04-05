<?php

/* @var $this yii\web\View */

$this->title = 'Halva202';
// use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html
?>

<?php if (Yii::$app->user->isGuest): ?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Hi!</h1>

        <p class="lead">Меня зовут Виктор. My name is Viktar.</p>

        <p><img src="/images/ava/avaYellow.jpg" alt="ava" /></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Чуток о себе</h2>

                <p>Обожаю стремиться вести здоровый, экологичный, активный образ жизни. Мне нравится жить разнообразно, и поэтому я люблю Беларусь за ее 4 поры года (и не только поэтому). Интересуюсь it-инновациями. Интернет для меня - это, прежде всего, среда ускоренного общения по делу. Полдня - программирую, полдня - преподаю.</p>

                <p><a class="btn btn-default" href="http://halva202.github.io/">Сайт-визитка до... &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Ссылки</h2>

                <p>
				Ввиду того, что я много чего посещаю, меня часто спрашивают: где, что, как) Пока парочка ссылок:
				<br>
				<a href="http://cvr.by/blog/istorii-uspekha/item/118-english-speaking-clubs-v-minske.html" target="blank">Английские спикин-клабы в Минске</a>
				<br>
				<a href="http://cvr.by/blog/istorii-uspekha/item/124-uber-revolyutsionnyj-startap-ili-putevye-zametki-polzovatelya.html" target="blank">Uber - новое такси в Минске</a>
				</p>

                <p><a class="btn btn-default" href="https://calendar.yandex.ru/week?embed&private_token=bb07b200d6f883707f1f430e8dfad8b46dc5053d&tz_id=Europe/Minsk">Календарь событий (пока не все события, а, главным образом, основные инглиш-клабы) &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Преподаю</h2>

                <p>
				Физика, химия, математика, web-программирование.
				</p>

                <p><a class="btn btn-default" href="http://repetitor.github.io/">Репетитор &raquo;</a></p>
            </div>
			<div class="col-lg-4">
                <h2>Программирую</h2>

                <p>
				PHP, MySQL, Yii2, JS. Создаю сайты в команде.
				</p>

                <p><a class="btn btn-default" href="http://cvr.by/">Центр выгодных решений &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
<?php else: ?>
<div class="site-index">

    <div class="body-content">
	
	<br>
	
	<h1> Общая информация для всех пользователей.</h1>
	<p> сайт реально новый. изъянов еще много. </p>
	
	<h1> Информация об ученике </h1>
	<p><?= $userprofile['info'] ?></p>
	
	<h1> Мнение преподавателя об учебном процессе </h1>
	<p><?= $userprofile['myOpinion'] ?></p>
	
	<h1> Мнение ученика об учебном процессе </h1>
	<p><?= $userprofile['pupilOpinion'] ?></p>
	<form action="" method="post">
    <p><textarea rows="10" cols="45" name="text"><?= $userprofile['pupilOpinion'] ?></textarea></p>
    <p><input type="submit" value="Изменить мнение"></p>
	</form>
	
	<h1>Предметы</h1>
	<ul>
	<?php foreach ($modelLessonPlus as $lesson): ?>
		<li>
			<?= $lesson[0]['title'] ?>
			
			<br>
			Мнение преподавателя: <?= $lesson[2]['lesson_'.$lesson[0]['id'].'_TutorOpinion'] ?> 
			
			<br>
			Мнение ученика: <?= $lesson[2]['lesson_'.$lesson[0]['id'].'_PupilOpinion'] ?>
			<form action="" method="post">
			<input type="hidden" name="pupilWantChange">
			<input type="hidden" name="nameCol" value="<?= 'lesson_'.$lesson[0]['id'].'_PupilOpinion' ?>">
			<p><textarea rows="10" cols="45" name="textLesson"><?= $userprofile['lesson_'.$lesson[0]['id'].'_PupilOpinion'] ?></textarea></p>
			<p><input type="submit" value="Изменить мнение"></p>
			</form>
			
			<ul>
				<?php foreach ($lesson[1] as $lessonSection): ?>
				<li>
					<?= $lessonSection[0]['title'] ?> 
					
					<br>
					Мнение преподавателя: <?= $lesson[2]['sec'.$lessonSection[0]['id'].'TutorOpinion'] ?>
					
					<br>
					Мнение ученика: <?= $lesson[2]['sec'.$lessonSection[0]['id'].'PupilOpinion'] ?>
					<form action="" method="post">
					<input type="hidden" name="nameCol" value="<?= 'sec'.$lesson[0]['id'].'PupilOpinion' ?>">
					<p><textarea rows="10" cols="45" name="textSection"><?= $userprofile['sec'.$lesson[0]['id'].'PupilOpinion'] ?></textarea></p>
					<p><input type="submit" value="Изменить мнение"></p>
					</form>
			
					<ul>
						<?php foreach ($lessonSection[1] as $lessonSectionTopic): ?>
						<li>
							<?= $lessonSectionTopic['title'] ?>
							
							<br>
							Мнение преподавателя: <?= $lesson[2]['topic'.$lessonSectionTopic['id'].'TutorOpinion'] ?>
							
							<br>
							Мнение ученика: <?= $lesson[2]['topic'.$lessonSectionTopic['id'].'PupilOpinion'] ?>
							<form action="" method="post">
							<input type="hidden" name="nameCol" value="<?= 'topic'.$lessonSectionTopic['id'].'PupilOpinion' ?>">
							<p><textarea rows="10" cols="45" name="textTopic"><?= $userprofile['topic'.$lessonSectionTopic['id'].'PupilOpinion'] ?></textarea></p>
							<p><input type="submit" value="Изменить мнение"></p>
							</form>
							
							
					
						</li>
						<?php endforeach; ?>
					</ul>
					
				</li>
				<?php endforeach; ?>
			</ul>
		</li>
	<?php endforeach; ?>
	</ul>

	</div>

</div>
<?php endif; ?>
