<?php
namespace frontend\controllers;

use backend\models\Student;
use common\models\Messages;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\web\Controller;

/**
 * Site controller
 */
class MessageController extends Controller
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
        $students = Student::find()->all();
        return Json::encode([
            'students' => 'students',
        ]);
    }

    public function actionShowUser()
    {

        return \yii\helpers\Json::encode(Student::find()->all());

    }
    public function actionSaveMessage($roomID, $userToID, $userFromID, $msg)
    {
        $model = new Messages();
        $model->room_id = $roomID;
        $model->user_id_to = $userToID;
        $model->user_id_from = $userFromID;
        $model->content = $msg;
        if ($model->save()) {
            return 1;
        } else {
            return \yii\helpers\Json::encode($model->getAttributes());
        }
    }
    public function actionGetDataMessage($roomID)
    {
        $messages = Messages::find()->where(['room_id' => $roomID])->all();
        return \yii\helpers\Json::encode($messages);
    }

}