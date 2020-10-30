<?php
namespace frontend\controllers;

use backend\models\StudentRegistration;
use common\models\OrganizationRequestAbilities;
use common\models\OrganizationRequests;
use frontend\models\Enterprises;
use yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class DetailRequestEnterpriseController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],

            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex($id)
    {
        //$id = 183; //pheu

        $organization_requests = OrganizationRequests::findOne($id); // lay thong tin phieu theo id

        $enterprise = Enterprises::getEnterpriseProfiles($organization_requests->organization_id);

        $listOrganization_requests = OrganizationRequests::find()->limit(5)->all();

        $lisSkill = OrganizationRequestAbilities::getSkill($organization_requests); // lay list skill student
        // phpinfo();
        return $this->render('index', [
            //'capacity' => $capacity,
            'organization_requests' => $organization_requests,
            'enterprise' => $enterprise,
            'lisSkill' => $lisSkill,
            'listOrganization_requests' => $listOrganization_requests,
        ]);

    }

    public function actionStudentRegister()
    {
        $studentID = Yii::$app->request->post('studentID');
        $requestID = Yii::$app->request->post('requestID');
        $model = new StudentRegistration();

        $model->student_id = $studentID;
        $model->request_id = $requestID;

        if ($model->save()) {
            return true;
        } else {
            return false;
        }

        // return StudentRegistrations::saveStudentRegistrations($studentID, $requestID);
    }

}
