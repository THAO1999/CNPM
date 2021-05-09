<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Messages".
 *
 * @property int $room_id
 * @property int $user_id_to
 * @property int $user_id_from
 * @property string $content

 *
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'user_id_to', 'user_id_from'], 'required'],
            [['content'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'room_id' => 'room',
            'user_id_to' => 'user id to',
            'user_id_from' => 'user id from At',
            'content' => 'content',
        ];
    }

}