<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Renungan;
use frontend\models\RenunganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mPDF;

/**
 * RenunganController implements the CRUD actions for Renungan model.
 */
class RenunganController extends Controller
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
     * Lists all Renungan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RenunganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Renungan model.
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
     * Creates a new Renungan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Renungan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_renungan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Renungan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_renungan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Renungan model.
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
     * Finds the Renungan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Renungan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Renungan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //function to download modul
    public function actionDownload($data) {
        $path = Yii::getAlias('@backend/web') . '/';

        $file = $path . $data;
        // echo $file;
        // die();
        if (file_exists($file)) {
            Yii::$app->response->sendFile($file);
        }
    //        if (file_exists($src)) {
    //            \Yii::$app->getRequest()->sendFile($nama, file_get_contents($src));
    //           
    //        }
        else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSamplepdf(){
        $path = Yii::getAlias('@backend/web') . '/';
        // $file = $path . $data;
        // if (file_exists($file)) {
            $mpdf = new mPDF;
            // $mpdf->WriteHTML($path);
            $mpdf->Output();
            exit();
        // }
    }
}
