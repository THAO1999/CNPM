<?php
namespace backend\controllers;

use backend\models\AssignedTable;
use backend\models\Student;
use backend\models\StudentRegistration;
use yii\data\ActiveDataProvider;
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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
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
        // lấy danh sách sinh viên có trang thái 1 từ bảng phân công
        $assignStudents = AssignedTable::find()
            ->where(['status' => 1])
            ->all();
        // danh sách id
        foreach ($assignStudents as $assignStudent) {
            $students[] = $assignStudent->student_id;
        }
        // lay ra danh sách sinh viên chưa được phân công
        $dataProvider = new ActiveDataProvider([
            'query' => Student::find()->where(['not in', 'id', $students]),
        ]);
        return $this->render('add-student', [
            //'searchModel' => $students,
            'dataProvider' => $dataProvider,
            'request_id' => $request_id,
        ]);
    }
    public function actionUpdate($request_id, $student_id)
    {

        $model = new AssignedTable();
        $model->student_id = $student_id;
        $model->organization_request_id = $request_id;
        $model->status = 1;
        $student = $this->findStudent($student_id);

        $model->save();
        // xoá những phiếu mà sinh viên đã đăng kí
        return $this->actionDeleteStudentFromRegister($student_id, $request_id);

        return $this->render('update', [
            'student_id' => $student_id,
            'request_id' => $request_id,
        ]);
    }

    public function actionDeleteStudentFromRegister($student_id, $request_id)
    {
        foreach ($this->findStudent($student_id, $request_id) as $value) {
            // xoá phiếu
            $value->delete();
        }
        return $this->actionIndex($request_id);
    }
// tìm những phiếu mà sinh viên đó đăng kí
    protected function findStudent($student_id)
    {
        if (($listStudent = StudentRegistration::find()->where(['student_id' => $student_id])->all()) !== null) {
            return $listStudent;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}