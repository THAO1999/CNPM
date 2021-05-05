<?php
namespace frontend\controllers;

use backend\models\AssignedTable;
use backend\models\StudentRegistration;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class RegisteredJobsController extends Controller
{
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

    public function actionIndex($student_id)
    {
        // lấy ra tất cả phiếu mà sinh viên đăng kí
        $dataProvider = new ActiveDataProvider([
            'query' => StudentRegistration::find()->where(['student_id' => $student_id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AssignedTable model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($request_id, $student_id)
    {
        return $this->redirect(['./detail-request-enterprise', 'id' => $request_id]);
    }

    /**
     * Deletes an existing AssignedTable model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($request_id, $student_id)
    {
        
        $this->findModel($request_id, $student_id)->delete();

        return $this->redirect(['index', 'student_id' => $student_id]);
    }

    protected function findModel($request_id, $student_id)
    {
        $model = StudentRegistration::find()
            ->where([
                'student_id' => $student_id,
                'request_id' => $request_id,
            ])
            ->one();
        return $model;

    }

}