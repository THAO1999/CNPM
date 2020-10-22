<?php
namespace frontend\controllers;


use Yii;

use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\CapacityDictionary;
use yii\data\ActiveDataProvider;
use common\models\OrganizationRequests;
use yii\filters\VerbFilter;
/**
 * Site controller
 */
class ProfileStudentController extends Controller
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



   

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionIndex()
    {
     
        return $this->render('index');
     
    }

 
}