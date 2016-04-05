<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lesson_section".
 *
 * @property integer $id
 * @property integer $lesson_id
 * @property string $title
 * @property integer $class
 * @property double $serialNumber
 * @property string $additionalInformation
 *
 * @property Lesson $lesson
 * @property LessonTopic[] $lessonTopics
 */
class LessonSection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson_section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lesson_id', 'title', 'class', 'serialNumber', 'additionalInformation'], 'required'],
            [['lesson_id', 'class'], 'integer'],
            [['serialNumber'], 'number'],
            [['additionalInformation'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['lesson_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lesson::className(), 'targetAttribute' => ['lesson_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson_id' => 'Lesson ID',
            'title' => 'Title',
            'class' => 'Class',
            'serialNumber' => 'Serial Number',
            'additionalInformation' => 'Additional Information',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLesson()
    {
        return $this->hasOne(Lesson::className(), ['id' => 'lesson_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessonTopics()
    {
        return $this->hasMany(LessonTopic::className(), ['lesson_section_id' => 'id']);
    }
}
