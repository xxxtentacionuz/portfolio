<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string|null $silka
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price'], 'required'],
            [['description'], 'string'],
            [['name', 'price', 'silka'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'price' => 'Price',
            'silka' => 'Silka',
        ];
    }
}
