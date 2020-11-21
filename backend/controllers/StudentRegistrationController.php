<?php

namespace backend\controllers;

use backend\models\AssignedTable;
use backend\models\StudentRegistration;
use common\models\UploadForm;
use frontend\models\Students;
use frontend\models\StudentSkillProfile;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * StudentRegistrationController implements the CRUD actions for StudentRegistration model.
 */
class StudentRegistrationController extends Controller
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
     * Lists all StudentRegistration models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => StudentRegistration::find()->where(['request_id' => $id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudentRegistration model.
     * @param integer $student_id
     * @param integer $request_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($student_id, $request_id)
    {
        $model = new Students();
        // $id = Yii::$app->user->identity->id; // id student
        $model = $model->getStudentProfiles($student_id);
        $img = 'imageFile';
        $model->imageFile = UploadForm::Upload($model, $img); // lay duong dan
        $list_StudentSkill = StudentSkillProfile::getSkill($model->getStudent($student_id)); // lay list skill student
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view', [
                'model' => $model,
                'list_StudentSkill' => $list_StudentSkill,
            ]);
        }

        return $this->render('view', [
            'model' => $model,
            'list_StudentSkill' => $list_StudentSkill,
        ]);
    }

    /**
     * Creates a new StudentRegistration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StudentRegistration();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'request_id' => $model->request_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StudentRegistration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $student_id
     * @param integer $request_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($student_id, $request_id)
    {
        $model = new AssignedTable();
        $model->student_id = $student_id;
        $model->organization_request_id = $request_id;
        $model->status = 1;
        $student = $this->findStudent($student_id);

        $model->save();
        return $this->actionDeleteStudentFromRegister($student_id, $request_id);

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
