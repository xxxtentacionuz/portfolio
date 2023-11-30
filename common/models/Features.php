<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "features".
 *
 * @property int $id
 * @property string $name
 * @property string $jop
 * @property string $image
 */
class Features extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'features';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'jop'], 'required'],
            [['name', 'jop', 'image'], 'string', 'max' => 255],
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
            'jop' => 'Jop',
            'image' => 'Image',
        ];
    }


    public function upload($filename)
    {
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@frontend').'/web/uploads'.'.'.$this->imageFile->extension);
            $this->image = $filename.'.'. $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }
}
