<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $email
 * @property string $password
 * @property string $salt
 * @property integer $role
 * @property integer $status
 */
class User extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'status'], 'integer'],
            [['email', 'password', 'salt'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'email' => 'Email',
            'password' => 'Password',
            'salt' => 'Salt',
            'role' => 'Role',
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($user_id)
    {
        return static::findOne(['user_id' => $user_id, 'status' => self::STATUS_ACTIVE]);
    }
}
