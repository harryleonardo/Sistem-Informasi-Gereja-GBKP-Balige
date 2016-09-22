<?php

namespace backend\controllers;

use Yii;
use backend\models\JadwalIbadah;
use backend\models\JadwalIbadahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * JadwalIbadahController implements the CRUD actions for JadwalIbadah model.
 */
class JadwalIbadahController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all JadwalIbadah models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JadwalIbadahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JadwalIbadah model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new JadwalIbadah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JadwalIbadah();

        if ($model->load(Yii::$app->request->post())) {
            $imageName = Yii::$app->db->createCommand('SELECT MAX(id_jadwal) FROM jadwal_ibadah')->queryScalar();
            $imageName +=1;
            $model->file = UploadedFile::getInstance($model,'file');

            $model->file->saveAs('jadwal_ibadah/'.$imageName.'.'.$model->file->extension);

            //save the path in the db column 
            $model->ket='jadwal_ibadah/'.$imageName.'.'.$model->file->extension;
            
           
            // echo '<br>'.$model->id_jadwal;
            $model->hari_tanggal = $model->hari_tanggal.':00';
            // echo '<br>'.$model->id_jadwal;
            $tmp = $model->save();
            

            return $this->redirect(['view', 'id' => $model->id_jadwal]);
        }else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing JadwalIbadah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_jadwal]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing JadwalIbadah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JadwalIbadah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return JadwalIbadah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JadwalIbadah::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
