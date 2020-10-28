<?php

namespace enterprise\controllers;

use backend\models\OrganizationRequest;
use common\models\CapacityDictionary;
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
        // foreach ($listOrganizationRequest as $value) {
        //     echo $value->status;
        //     phpinfo();
        // }
        return $this->render('index', [
            'listOrganizationRequest' => $listOrganizationRequest,

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
