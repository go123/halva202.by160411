<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class LessonTopic extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson_topic';
    }

	//хочу знать темы раздела
    public static function getLessonSingleSectionSingleTopics($lesson_section_id=1)
	{
		$lessonTopics = LessonTopic::find()->where(['lesson_section_id' => $lesson_section_id])->all();
		return $lessonTopics;
	}
	
}
