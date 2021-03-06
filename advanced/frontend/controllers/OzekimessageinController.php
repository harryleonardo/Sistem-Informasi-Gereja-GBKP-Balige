<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Datadiri;
use frontend\models\Ozekimessagein;
use frontend\models\OzekimessageinSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
/**
 * OzekimessageinController implements the CRUD actions for Ozekimessagein model.
 */
class OzekimessageinController extends Controller
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
     * Lists all Ozekimessagein models.
     * @return mixed
     */
    public function actionIndex()
    {  
        $model = new Ozekimessagein();
        $searchModel = new OzekimessageinSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        // $model = new Ozekimessagein();
        
        return $this->render('index', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ozekimessagein model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(\Yii::$app->user->isGuest)
        {
            Yii::$app->session->setFlash('error', 'Anda harus login terlebih dahulu');
            $this->redirect(array('site/login'));
        }
        
        $datadiri = Datadiri::find()->all();

        $test = null;
        $pattern = '/[\x{ff0c}*#;]/u';
        $model = Ozekimessagein::findOne($id);
        $message = $model->msg;

        $nophonesender = $model->sender;

        foreach ($datadiri as $key) {
            $no_telp = $key->no_telp;

            //Validation Phone Number that registered in DB
            if(stripos($nophonesender,$no_telp)!== false){
                $test = 1;
            }
        }

        if($test == 1){
            if(stripos($message,'*')!== false){
                $tamp = preg_split($pattern, $message);                
                
                return $this->render('view', [
                    'model' => $this->findModel($id),
                    'tamp' => $tamp,
                    'datadiri' => $datadiri,
                ]);
            }

            else{
                return $this->render('view_false', [
                    'model' => $this->findModel($id),
                ]);
            }
        }

        else{
                return $this->render('view_no_false', [
                    'model' => $this->findModel($id),
                ]);   
            }
    }

    /**
     * Creates a new Ozekimessagein model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ozekimessagein();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ozekimessagein model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ozekimessagein model.
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
     * Finds the Ozekimessagein model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ozekimessagein the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ozekimessagein::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
