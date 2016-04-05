<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lesson_topic".
 *
 * @property integer $id
 * @property integer $lesson_section_id
 * @property string $title
 * @property integer $serialNumber
 * @property string $additionalInformation
 *
 * @property LessonSection $lessonSection
 */
class LessonTopic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson_topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lesson_section_id', 'title', 'serialNumber', 'additionalInformation'], 'required'],
            [['lesson_section_id', 'serialNumber'], 'integer'],
            [['additionalInformation'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['lesson_section_id'], 'exist', 'skipOnError' => true, 'targetClass' => LessonSection::className(), 'targetAttribute' => ['lesson_section_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson_section_id' => 'Lesson Section ID',
            'title' => 'Title',
            'serialNumber' => 'Serial Number',
            'additionalInformation' => 'Additional Information',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessonSection()
    {
        return $this->hasOne(LessonSection::className(), ['id' => 'lesson_section_id']);
    }
}
