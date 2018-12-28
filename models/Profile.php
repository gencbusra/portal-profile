<?php

namespace kouosl\profile\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int $surname
 * @property string $birthday
 * @property string $school
 * @property string $start_date
 * @property string $graduation_year
 * @property string $job
 * @property string $company
 * @property string $department
 * @property int $phone_number
 * @property string $mail_address
 * @property string $abilities
 * @property string $experiences
 * @property string $hobbies
 * @property string $link
 * @property string $status
 * @property resource $photo
 * @property resource $image_url
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'name', 'surname', 'birthday', 'school', 'start_date', 'graduation_year', 'job', 'company', 'department', 'phone_number', 'mail_address', 'abilities', 'experiences', 'hobbies', 'link', 'photo', 'image_url'], 'required'],
            [['id', 'user_id', 'surname', 'phone_number', 'status'], 'integer'],
            [['birthday', 'start_date', 'graduation_year'], 'safe'],
            [['mail_address', 'abilities', 'experiences', 'hobbies', 'link', 'photo', 'image_url'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['school'], 'string', 'max' => 150],
            [['job', 'company', 'department'], 'string', 'max' => 250],
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
            'user_id' => 'User ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'birthday' => 'Birthday',
            'school' => 'School',
            'start_date' => 'Start Date',
            'graduation_year' => 'Graduation Year',
            'job' => 'Job',
            'company' => 'Company',
            'department' => 'Department',
            'phone_number' => 'Phone Number',
            'mail_address' => 'Mail Address',
            'abilities' => 'Abilities',
            'experiences' => 'Experiences',
            'hobbies' => 'Hobbies',
            'link' => 'Link',
            'status' => 'Status',
            'photo' => 'Photo',
            'image_url' => 'Image Url',
        ];
    }
}
