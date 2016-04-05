<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Userprofile extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    public static function getUserprofile($id)
	{
		$userprofile = Userprofile::findOne(['user_id' => $id,]);
		// $userprofile = Userprofile::find()
         // ->where(['user_id'=>$id])->one();
		return $userprofile;
	}
	
}
