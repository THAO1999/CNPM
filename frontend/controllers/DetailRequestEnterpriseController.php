<?php
namespace frontend\controllers;

use backend\models\OrganizationRequest;
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
        //$id = 183; //phieu

        $organization_requests = OrganizationRequests::findOne($id); // lay thong tin phieu theo id

        $enterprise = Enterprises::getEnterpriseProfiles($organization_requests->organization_id);

        $listOrganization_requests = OrganizationRequests::find()->where(['status' => OrganizationRequest::confirm])->limit(5)->all();

        $count = StudentRegistration::getCount($id);
        $slot = $organization_requests->amount - $count;
        $lisSkill = OrganizationRequestAbilities::getSkill($organization_requests); // lay list skill student
        // phpinfo();
        return $this->render('index', [
            //'capacity' => $capacity,
            'organization_requests' => $organization_requests,
            'enterprise' => $enterprise,
            'lisSkill' => $lisSkill,
            'listOrganization_requests' => $listOrganization_requests,
            'count' => $count,
            'slot' => $slot,
        ]);

    }
    // đăng kí phiếu tuyển dụng
    public function actionStudentRegister()
    {
        $studentID = Yii::$app->request->post('studentID');
        $requestID = Yii::$app->request->post('requestID');
        $enterpriseID = Yii::$app->request->post('enterpriseID');
        $model = new StudentRegistration();

        $model->student_id = $studentID;
        $model->request_id = $requestID;
        $model->enterprise_id = $enterpriseID;
        if ($model->save()) {
            return 1;
        } else {

            return 0;
        }

        // return StudentRegistrations::saveStudentRegistrations($studentID, $requestID);
    }

}