<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_detail".
 *
 * @property integer $user_detail_id
 * @property integer $user_id
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $dob
 * @property string $company
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $postal_code
 * @property string $country
 * @property string $additional_information
 * @property integer $home_phone
 * @property integer $mobile_phone
 * @property string $create_date
 * @property string $updated_date
 * @property integer $status
 */
class UserDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'home_phone', 'mobile_phone', 'status'], 'integer'],
            [['dob', 'create_date', 'updated_date'], 'safe'],
            [['additional_information'], 'string'],
            [['title', 'first_name', 'last_name', 'email', 'company', 'address', 'address2', 'city', 'state', 'postal_code', 'country'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_detail_id' => 'User Detail ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'dob' => 'Dob',
            'company' => 'Company',
            'address' => 'Address',
            'address2' => 'Address2',
            'city' => 'City',
            'state' => 'State',
            'postal_code' => 'Postal Code',
            'country' => 'Country',
            'additional_information' => 'Additional Information',
            'home_phone' => 'Home Phone',
            'mobile_phone' => 'Mobile Phone',
            'create_date' => 'Create Date',
            'updated_date' => 'Updated Date',
            'status' => 'Status',
        ];
    }
}
