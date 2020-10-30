<?php

namespace enterprise\controllers;

use backend\models\OrganizationRequest;
use common\models\CapacityDictionary;
use common\models\OrganizationRequestAbilities;
use common\models\OrganizationRequests;
use frontend\models\Enterprises;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * CapacityDictionaryController implements the CRUD actions for CapacityDictionary model.
 */
class OrganizationRequestController extends Controller
{
    // const confirm = 10;
    // const unConfirm = 9;
    // const cancel = 0;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CapacityDictionary models.
     * @return mixed
     */
    public function actionIndex($status)
    {
        // confirm

        $listOrganizationRequest = $this->checkStatus($status);

        return $this->render('index', [
            'listOrganizationRequest' => $listOrganizationRequest,

        ]);

    }
    public function actionView($id)
    {
        //$id = 183; //pheu

        $organization_requests = OrganizationRequests::findOne($id); // lay thong tin phieu theo id

        $enterprise = Enterprises::getEnterpriseProfiles($organization_requests->organization_id);

        $listOrganization_requests = OrganizationRequests::find()->limit(5)->all(); //lay list

        $lisSkill = OrganizationRequestAbilities::getSkill($organization_requests); // lay list skill student
        // phpinfo();
        return $this->render('view', [
            //'capacity' => $capacity,
            'organization_requests' => $organization_requests,
            'enterprise' => $enterprise,
            'lisSkill' => $lisSkill,
            'listOrganization_requests' => $listOrganization_requests,
        ]);

    }
    public function checkStatus($status)
    {
        if ($status == OrganizationRequest::confirm) {
            return $this->getListOrganizationRequestConfirm();
        } elseif ($status == OrganizationRequest::unConfirm) {
            return $this->getListOrganizationRequestUnConfirm();
        } elseif ($status == OrganizationRequest::cancel) {
            return $this->getListOrganizationRequestCancel();
        }

    }
    public function getListOrganizationRequestConfirm()
    {
        return OrganizationRequest::find()->where(['status' => OrganizationRequest::confirm])->all();
    }
    public function getListOrganizationRequestUnConfirm()
    {
        return OrganizationRequest::find()->where(['status' => OrganizationRequest::unConfirm])->all();
    }
    public function getListOrganizationRequestCancel()
    {
        return OrganizationRequest::find()->where(['status' => OrganizationRequest::cancel])->all();
    }
}
