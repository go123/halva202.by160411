<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Lesson extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson';
    }

    public static function getLessons()
	{
		$lesson = Lesson::find()->all();
		return $lesson;
	}
	
}
