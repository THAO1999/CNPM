<?php
namespace backend\controllers;

use backend\models\AssignedTable;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * AssignedTableController implements the CRUD actions for AssignedTable model.
 */
class AssignedTableController extends Controller
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
    public function actionIndex($id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AssignedTable::find()->where(['organization_request_id' => $id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'request_id' => $id,
        ]);
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
        $assignedTable = AssignedTable::find()
            ->where(['student_id' => $student_id, 'organization_request_id' => $request_id])
            ->one();
        $assignedTable->delete();
        return $this->redirect(['assigned-table/index?id=' . $request_id]);
    }

}