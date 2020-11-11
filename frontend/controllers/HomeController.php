<?php
namespace frontend\controllers;

use backend\models\OrganizationRequest;
use common\models\CapacityDictionary;
use common\models\OrganizationRequestAbilities;
use common\models\OrganizationRequests;
use frontend\models\Enterprises;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class HomeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
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
    public function actionIndex()
    {
        $model = new Enterprises();
        $capacity = CapacityDictionary::find()->limit(12)->all();
        $listOrganization_requests = OrganizationRequests::find()->where(['status' => OrganizationRequest::confirm])->all();
        return $this->render('index', [
            'capacity' => $capacity,
            'organization_requests' => $listOrganization_requests,
            'model' => $model,
        ]);

    }
    public function actionSearchByNameEnterprise()
    {
        $listOrganization_requests = []; // danh sách các phiếu yêu cầu
        $username = $_POST['Enterprises']['username']; // username cần tìm
        // lấy ra danh sách các doanh nghiệp cần tìm
        $listEnterprise = Enterprises::find()->Where(['LIKE', 'enterprise.username', $username])->all();
// duyện danh sách theo id doanh nghiệp
        foreach ($listEnterprise as $value) {
            // lấy ra các phiếu có id doanh nghiệp cần tìm
            if (($model = OrganizationRequests::find()->where([
                'organization_id' => $value->id,
                'status' => OrganizationRequest::confirm,

            ])->all()) !== null) {
                // lưu các phiếu
                foreach ($model as $m) {
                    $listOrganization_requests[] = $m;
                }

            }
        }

        $capacity = CapacityDictionary::find()->limit(12)->all();
        $model = new Enterprises();
        return $this->render('index', [
            'capacity' => $capacity,
            'organization_requests' => $listOrganization_requests,
            'model' => $model,
        ]);

    }
    public function actionSearchByCapacity($id)
    {

        $listOrganization_requests = [];
        // tìm list id phiếu
        $listOrganization_requestsID = OrganizationRequestAbilities::find()->where(['ability_id' => $id])->all();
        // từ id phiếu lấy ra được các phiếu
        foreach ($listOrganization_requestsID as $value) {

            if (($model = OrganizationRequests::findOne([
                'status' => OrganizationRequest::confirm,
                'id' => $value->organization_request_id,
            ])) !== null) {
                $listOrganization_requests[] = $model;
            }

        }

        $capacity = CapacityDictionary::find()->limit(12)->all();
        $model = new Enterprises();
        return $this->render('index', [
            'capacity' => $capacity,
            'organization_requests' => $listOrganization_requests,
            'model' => $model,
        ]);
    }
}
