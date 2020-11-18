<?php
namespace frontend\controllers;

use common\models\LoginFormStudent;
use frontend\models\AssignedTables;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
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
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
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
     * Displays homepage.
     *
     * @return mixed
     */

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $assignedTables = new AssignedTables();
        if (!Yii::$app->user->isGuest) {
            if ($assignedTables) {

                return $this->redirect('../assigned-table/index?student_id=' . $assignedTables->student_id);
            } else {
                return $this->redirect('../home/index');
            }
        }
        $this->layout = 'blank';

        $model = new LoginFormStudent();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            $assignedTables = $this->actionCheckStatus();

            if ($assignedTables) {

                return $this->redirect('../assigned-table/index?student_id=' . $assignedTables->student_id);
            } else {
                return $this->redirect('../home/index');
            }

        } else {
            $model->password = '';
            //phpinfo();

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionCheckStatus()
    {
        $id = Yii::$app->user->identity->id;
        $model = AssignedTables::findOne([
            'student_id' => $id,
            'status' => 1,
        ]);
        // phpinfo();
        return $model;

    }

    public function actionLogout()
    {

        Yii::$app->user->logout();

        return $this->goHome();
    }

}
