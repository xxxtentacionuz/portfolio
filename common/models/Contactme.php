<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contactme".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $description
 * @property string $send
 */
class Contactme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'description', 'send'], 'required'],
            [['description'], 'string'],
            [['name', 'email', 'send'], 'string', 'max' => 255],
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
            'email' => 'Email',
            'description' => 'Description',
            'send' => 'Send',
        ];
    }
}
