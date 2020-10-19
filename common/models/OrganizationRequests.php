<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "organization_requests".
 *
 * @property int $id
 * @property int $organization_id
 * @property string $subject
 * @property string $short_description
 * @property int $amount
 * @property string|null $date_submitted
 * @property int $status
 * @property string $imageFile
 *
 * @property AssignedTable[] $assignedTables
 * @property OrganizationRequestAbilities[] $organizationRequestAbilities
 */
    class OrganizationRequests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organization_requests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organization_id', 'subject', 'short_description', 'amount' ], 'required'],
            [['organization_id', 'amount', 'status'], 'integer'],
            [['date_submitted'], 'safe'],
            [['subject', 'short_description'], 'string', 'max' => 40],
            //[['imageFile'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'organization_id' => 'Organization ID',
            'subject' => ' Phiếu Tuyển dụng',
            'short_description' => 'Miêu Tả Phiếu',
            'amount' => 'Số Lương ',
            'date_submitted' => 'ngày hết hạn',
            'status' => 'Trạng thái',
            'imageFile' => 'Image File',
        ];
    }

    /**
     * Gets query for [[AssignedTables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssignedTables()
    {
        return $this->hasMany(AssignedTable::className(), ['organization_request_id' => 'id']);
    }

    /**
     * Gets query for [[OrganizationRequestAbilities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizationRequestAbilities()
    {
        return $this->hasMany(OrganizationRequestAbilities::className(), ['organization_request_id' => 'id']);
    }

}
