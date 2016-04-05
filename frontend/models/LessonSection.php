<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class LessonSection extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson_section';
    }

	//хочу знать разделы предмета
    public static function getLessonSingleSections($lesson_id)
	{
		$lessonSections = LessonSection::find()->where(['lesson_id' => $lesson_id])->all();
		return $lessonSections;
	}
	
}
