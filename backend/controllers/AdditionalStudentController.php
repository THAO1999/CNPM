<?php
namespace backend\controllers;

use backend\models\AssignedTable;
use backend\models\Student;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class AdditionalStudentController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * Lists all AssignedTable models.
     * @return mixed
     */
    public function actionIndex($request_id)
    {
        $students = [];
        //$assignStudents = AssignedTable::find()->where(['status' => 10])->all();
        $assignStudents = AssignedTable::find()
            ->where(['status' => 1])
            ->all();
        foreach ($assignStudents as $assignStudent) {
            $students[] = $assignStudent->student_id;
        }
        $dataProvider = new ActiveDataProvider([
            'query' => Student::find()->where(['not in', 'id', $students]),
        ]);
        return $this->render('add-student', [
            //'searchModel' => $students,
            'dataProvider' => $dataProvider,
            'request_id' => $request_id,
        ]);
    }
// chua lam
    public function actionUpdate($student_id, $request_id)
    {
        echo "thoa";
        die();
        $model = new AssignedTable();
        $model->student_id = $student_id;
        $model->organization_request_id = $request_id;
        $model->status = 1;
        $student = $this->findStudent($student_id);

        $model->save();
        return $this->actionDeleteStudentFromRegister($student_id, $request_id);

        return $this->render('update', [
            'student_id' => $student_id,
            'request_id' => $request_id,
        ]);
    }

    /**
     * Deletes an existing StudentRegistration model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $student_id
     * @param integer $request_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionDeleteStudentFromRegister($student_id, $request_id)
    {
        foreach ($this->findStudent($student_id, $request_id) as $value) {
            # code...
            $value->delete();
        }
        return $this->actionIndex($request_id);
    }

    protected function findStudent($student_id)
    {
        if (($listStudent = StudentRegistration::find()->where(['student_id' => $student_id])->all()) !== null) {
            return $listStudent;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}