<?php
namespace enterprise\controllers;

use common\models\OrganizationRequestAbilities;
use common\models\OrganizationRequests;
use common\models\UploadForm;
use enterprise\models\Capacity;
use Yii;
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
    public function actionCreate()
    {
        $model = new OrganizationRequests();
        $capacity = new Capacity();
        $organizationRequestAbilities = new OrganizationRequestAbilities();
        $model->organization_id = Yii::$app->user->identity->id;
        $model->status = 9;
        $img = "imageFile";
        $model->imageFile = UploadForm::Upload($model, $img);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $organizationRequestAbilities->luu($model->id);
            return $this->redirect('../organization-request/index?status=9');
        }
        return $this->render('create', [
            'model' => $model,
            'capacity' => $capacity,
        ]);
    }

    // /**
    //  * Displays about page.
    //  *
    //  * @return mixed
    //  */
    // public function actionIndex()
    // {
    //     $id = Yii::$app->user->identity->id; // id Enterprises
    //     $listOrganization_requests = OrganizationRequests::find()->where(['organization_id' => $id])->all();
    //     return $this->render('index', [
    //         //  'capacity' => $capacity,
    //         'listOrganization_requests' => $listOrganization_requests,
    //     ]);
    // }

}
