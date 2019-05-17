<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%link_logs}}".
 *
 * @property int $id
 * @property string $link
 * @property string $time
 */
class LinkLogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%link_logs}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link'], 'required'],
            [['link'], 'string'],
            [['time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'time' => 'Time',
        ];
    }
}
