<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aboutme".
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $image
 */
class Aboutme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public static function tableName()
    {
        return 'aboutme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lastname'], 'required'],
            [['name', 'lastname', 'image'], 'string', 'max' => 1000],
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
            'image' => 'Image',
        ];
    }
    public function Update1($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->d_img_path;
        if ($model->load(Yii::$app->request->post()))
        {
            $image = UploadedFile::getInstance($model, 'd_img_path');
            if(isset($image)){
                $model->d_img_path=  $model->d_nic.'.'.$image->extension;
            } else {
                $model->d_img_path = $oldImage;
            }
            if($model->save())
            {
                if(isset($image)){
                    $image->saveAs('uploads/'.$model->d_img_path);
                }
            }
            return $this->redirect('view');
        }
    }


    public function upload($filename)
    {
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@frontend').'/web/uploads/'.$filename. '.' . $this->imageFile->extension);
            $this->image = $filename.'.'.$this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }
}
