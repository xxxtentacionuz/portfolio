<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $job
 */
class Header extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lastname', 'job'], 'required'],
            [['id'], 'integer'],
            [['name', 'lastname', 'job'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'job' => 'Job',
        ];
    }
}
