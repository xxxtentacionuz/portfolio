<?php
namespace api\models;

use common\models\User;

class UserModel extends User
{
    public function fields()
    {
//        $fields = parent::fields();
//        unset($fields['auth_key'], $fields['password_hash']);
//        return $fields;
        return [
            'id',
            'username',
            'email',
            'Holati' => function () {
                return $this->status == 10 ? "Active" : 'Inactive';
            }
        ];
    }

}