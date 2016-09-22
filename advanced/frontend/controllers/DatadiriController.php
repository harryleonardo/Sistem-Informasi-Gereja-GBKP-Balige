<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Datadiri;
use frontend\models\DatadiriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\RegistrationForm;
use frontend\models\Dataanak;
use frontend\models\Datagereja;
use frontend\models\Dataistri;
use frontend\models\Datakeluarga;
use frontend\models\Datasidi;
use frontend\models\Databaptis;
use frontend\models\Model;
use yii\data\ActiveDataProvider;
/**
 * DatadiriController implements the CRUD actions for Datadiri model.
 */
class DatadiriController extends Controller
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
     * Lists all Datadiri models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DatadiriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    //Sektor 1
    public function actionSektor_1()
    {
        $id = Yii::$app->user->id;
        $searchModel = new DatadiriSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => Datadiri::find()->where(['sektor' => "1"]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('sektor_1', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    //Sektor 2
    public function actionSektor_2()
    {
        $id = Yii::$app->user->id;
        $searchModel = new DatadiriSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => Datadiri::find()->where(['sektor' => "2"]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('sektor_2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    //Sektor 3
    public function actionSektor_3()
    {
        $id = Yii::$app->user->id;
        $searchModel = new DatadiriSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => Datadiri::find()->where(['sektor' => "3"]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('sektor_3', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Datadiri model.
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
     * Creates a new Datadiri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Datadiri();
        $modelsDataanak = [new Dataanak];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_datadiri]);
        } else {
            return $this->render('create', 'register',[
                'model' => $model,
                'modelsDataanak' => (empty($modelsDataanak)) ? [new Dataanak] : $modelsDataanak
            ]);
        }
    }

    /**
     * Updates an existing Datadiri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_datadiri]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Datadiri model.
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
     * Finds the Datadiri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Datadiri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Datadiri::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //Sektor 1
    public function actionView_1($id)
    {
        if(\Yii::$app->user->isGuest)
        {
            Yii::$app->session->setFlash('error', 'Anda harus login terlebih dahulu');
            $this->redirect(array('site/login'));
        }

        $searchModel = new DatadiriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        //Data diri
        $datadiri = Datadiri::find()->where(['id_datadiri' => $id]); 
        $dataProviderDatadiri = new ActiveDataProvider(
           [
                'query'=> $datadiri,
               'pagination'=>['pageSize'=>10]
           ]    
        );


        //Data gereja
        $datagereja = Datagereja::find()->where(['id_datadiri' => $id]);
        $dataProviderDatagereja = new ActiveDataProvider(
           [
               'query'=> $datagereja,
               'pagination'=>['pageSize'=>10]
           ]    
        );

        //Data keluarga
        $datakeluarga = Datakeluarga::find()->where(['id_datadiri' => $id]);
        $dataProviderDatakeluarga = new ActiveDataProvider(
           [
               'query'=> $datakeluarga,
               'pagination'=>['pageSize'=>10]
           ]    
        );

        //Data Baptis
        // $datagereja = Databaptis::find()->where(['id_datagereja' => $id]);
        $idDataGereja = Datagereja::findOne(['id_datadiri' => $id]);
        $databaptis = Databaptis::findOne(['id_datagereja' => $idDataGereja->id_datagereja]);
        $dataBaptis = Databaptis::find()->where(['id_databaptis' => $databaptis->id_databaptis]);
        $dataProviderDatabaptis = new ActiveDataProvider(
           [
               'query'=> $dataBaptis,
               'pagination'=>['pageSize'=>10]
           ]    
        );
        // echo 'Data  : ' . $databaptis->id_datagereja;
        // die();

        //Data Sidi
        $datasidi = Datasidi::find()->where(['id_datagereja' => $idDataGereja->id_datagereja]);
        $dataProviderDatasidi = new ActiveDataProvider(
           [
               'query'=> $datasidi,
               'pagination'=>['pageSize'=>10]
           ]    
        );


        $idDataKeluarga = Datakeluarga::findOne(['id_datadiri' => $id]);
        $dataistri = Dataistri::findOne(['id_keluarga'=>$idDataKeluarga->id_datakeluarga]);
        $dataIstri = Dataistri::find()->where(['id_istri'=>$dataistri->id_istri]);
        $dataProviderDataistri = new ActiveDataProvider(
           [
               'query'=> $dataIstri,
               'pagination'=>['pageSize'=>10]
           ]
        );
        
        // $dataanak = Dataanak::find(['id_keluarga' => $idDataKeluarga->id_datakeluarga]);
        $dataanak = Dataanak::find()->where(['id_keluarga' => $idDataKeluarga->id_datakeluarga]);

        // echo $idDataKeluarga->id_datakeluarga;
        // die();

        $dataProviderDataanak = new ActiveDataProvider(
           [
               'query'=> $dataanak,
               'pagination'=>['pageSize'=>10]
           ]
        );
        // echo 'Data  : ' . $dataistri->id_datakeluarga;
        // die();

        return $this->render('view_1', [
            'model' => $this->findModel($id),
            // 'modelkeluarga'=>$this->findModel(),
            // 'dataProviderDatadiri' => $dataProviderDatadiri,
            'dataProviderDatagereja' => $dataProviderDatagereja,
            'dataProviderDatakeluarga' => $dataProviderDatakeluarga,
            'dataProviderDatabaptis' => $dataProviderDatabaptis,
            'dataProviderDatasidi' => $dataProviderDatasidi,
            'dataProviderDataistri'=> $dataProviderDataistri,
            'dataProviderDataanak' => $dataProviderDataanak,
        ]);
        
    }


    //Sektor 2
    public function actionView_2($id)
    {
        if(\Yii::$app->user->isGuest)
        {
            Yii::$app->session->setFlash('error', 'Anda harus login terlebih dahulu');
            $this->redirect(array('site/login'));
        }

        $searchModel = new DatadiriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        //Data diri
        $datadiri = Datadiri::find()->where(['id_datadiri' => $id]); 
        $dataProviderDatadiri = new ActiveDataProvider(
           [
                'query'=> $datadiri,
               'pagination'=>['pageSize'=>10]
           ]    
        );


        //Data gereja
        $datagereja = Datagereja::find()->where(['id_datadiri' => $id]);
        $dataProviderDatagereja = new ActiveDataProvider(
           [
               'query'=> $datagereja,
               'pagination'=>['pageSize'=>10]
           ]    
        );

        //Data keluarga
        $datakeluarga = Datakeluarga::find()->where(['id_datadiri' => $id]);
        $dataProviderDatakeluarga = new ActiveDataProvider(
           [
               'query'=> $datakeluarga,
               'pagination'=>['pageSize'=>10]
           ]    
        );

        //Data Baptis
        // $datagereja = Databaptis::find()->where(['id_datagereja' => $id]);
        $idDataGereja = Datagereja::findOne(['id_datadiri' => $id]);
        $databaptis = Databaptis::findOne(['id_datagereja' => $idDataGereja->id_datagereja]);
        $dataBaptis = Databaptis::find()->where(['id_databaptis' => $databaptis->id_databaptis]);
        $dataProviderDatabaptis = new ActiveDataProvider(
           [
               'query'=> $dataBaptis,
               'pagination'=>['pageSize'=>10]
           ]    
        );
        // echo 'Data  : ' . $databaptis->id_datagereja;
        // die();

        //Data Sidi
        $datasidi = Datasidi::find()->where(['id_datagereja' => $idDataGereja->id_datagereja]);
        $dataProviderDatasidi = new ActiveDataProvider(
           [
               'query'=> $datasidi,
               'pagination'=>['pageSize'=>10]
           ]    
        );


        $idDataKeluarga = Datakeluarga::findOne(['id_datadiri' => $id]);
        $dataistri = Dataistri::findOne(['id_keluarga'=>$idDataKeluarga->id_datakeluarga]);
        $dataIstri = Dataistri::find()->where(['id_istri'=>$dataistri->id_istri]);
        $dataProviderDataistri = new ActiveDataProvider(
           [
               'query'=> $dataIstri,
               'pagination'=>['pageSize'=>10]
           ]
        );
        
        // $dataanak = Dataanak::find(['id_keluarga' => $idDataKeluarga->id_datakeluarga]);
        $dataanak = Dataanak::find()->where(['id_keluarga' => $idDataKeluarga->id_datakeluarga]);

        // echo $idDataKeluarga->id_datakeluarga;
        // die();

        $dataProviderDataanak = new ActiveDataProvider(
           [
               'query'=> $dataanak,
               'pagination'=>['pageSize'=>10]
           ]
        );
        // echo 'Data  : ' . $dataistri->id_datakeluarga;
        // die();

        return $this->render('view_2', [
            'model' => $this->findModel($id),
            // 'modelkeluarga'=>$this->findModel(),
            // 'dataProviderDatadiri' => $dataProviderDatadiri,
            'dataProviderDatagereja' => $dataProviderDatagereja,
            'dataProviderDatakeluarga' => $dataProviderDatakeluarga,
            'dataProviderDatabaptis' => $dataProviderDatabaptis,
            'dataProviderDatasidi' => $dataProviderDatasidi,
            'dataProviderDataistri'=> $dataProviderDataistri,
            'dataProviderDataanak' => $dataProviderDataanak,
        ]);
        
    }


    //Sektor 3
    public function actionView_3($id)
    {
        if(\Yii::$app->user->isGuest)
        {
            Yii::$app->session->setFlash('error', 'Anda harus login terlebih dahulu');
            $this->redirect(array('site/login'));
        }
        
        $searchModel = new DatadiriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        //Data diri
        $datadiri = Datadiri::find()->where(['id_datadiri' => $id]); 
        $dataProviderDatadiri = new ActiveDataProvider(
           [
                'query'=> $datadiri,
               'pagination'=>['pageSize'=>10]
           ]    
        );


        //Data gereja
        $datagereja = Datagereja::find()->where(['id_datadiri' => $id]);
        $dataProviderDatagereja = new ActiveDataProvider(
           [
               'query'=> $datagereja,
               'pagination'=>['pageSize'=>10]
           ]    
        );

        //Data keluarga
        $datakeluarga = Datakeluarga::find()->where(['id_datadiri' => $id]);
        $dataProviderDatakeluarga = new ActiveDataProvider(
           [
               'query'=> $datakeluarga,
               'pagination'=>['pageSize'=>10]
           ]    
        );

        //Data Baptis
        // $datagereja = Databaptis::find()->where(['id_datagereja' => $id]);
        $idDataGereja = Datagereja::findOne(['id_datadiri' => $id]);
        $databaptis = Databaptis::findOne(['id_datagereja' => $idDataGereja->id_datagereja]);
        $dataBaptis = Databaptis::find()->where(['id_databaptis' => $databaptis->id_databaptis]);
        $dataProviderDatabaptis = new ActiveDataProvider(
           [
               'query'=> $dataBaptis,
               'pagination'=>['pageSize'=>10]
           ]    
        );
        // echo 'Data  : ' . $databaptis->id_datagereja;
        // die();

        //Data Sidi
        $datasidi = Datasidi::find()->where(['id_datagereja' => $idDataGereja->id_datagereja]);
        $dataProviderDatasidi = new ActiveDataProvider(
           [
               'query'=> $datasidi,
               'pagination'=>['pageSize'=>10]
           ]    
        );


        $idDataKeluarga = Datakeluarga::findOne(['id_datadiri' => $id]);
        $dataistri = Dataistri::findOne(['id_keluarga'=>$idDataKeluarga->id_datakeluarga]);
        $dataIstri = Dataistri::find()->where(['id_istri'=>$dataistri->id_istri]);
        $dataProviderDataistri = new ActiveDataProvider(
           [
               'query'=> $dataIstri,
               'pagination'=>['pageSize'=>10]
           ]
        );
        
        // $dataanak = Dataanak::find(['id_keluarga' => $idDataKeluarga->id_datakeluarga]);
        $dataanak = Dataanak::find()->where(['id_keluarga' => $idDataKeluarga->id_datakeluarga]);

        // echo $idDataKeluarga->id_datakeluarga;
        // die();

        $dataProviderDataanak = new ActiveDataProvider(
           [
               'query'=> $dataanak,
               'pagination'=>['pageSize'=>10]
           ]
        );
        // echo 'Data  : ' . $dataistri->id_datakeluarga;
        // die();

        return $this->render('view_3', [
            'model' => $this->findModel($id),
            // 'modelkeluarga'=>$this->findModel(),
            // 'dataProviderDatadiri' => $dataProviderDatadiri,
            'dataProviderDatagereja' => $dataProviderDatagereja,
            'dataProviderDatakeluarga' => $dataProviderDatakeluarga,
            'dataProviderDatabaptis' => $dataProviderDatabaptis,
            'dataProviderDatasidi' => $dataProviderDatasidi,
            'dataProviderDataistri'=> $dataProviderDataistri,
            'dataProviderDataanak' => $dataProviderDataanak,
        ]);
        
    }

    public function actionRegister()
    {
        
        $model = new RegistrationForm();
        $models1Dataanak = [new Dataanak];
        $modelsDataanak = Model::createMultiple(Dataanak::classname());
            Model::loadMultiple($modelsDataanak, Yii::$app->request->post());

        if ($model->load(Yii::$app->request->post())) {
            if ($model->register()) {
                //$valid = $model->validate();
                $valid = Model::validateMultiple($modelsDataanak);
                if (!$valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        
                            foreach ($modelsDataanak as $modelDataanak) {
                                $modelDataanak->id_keluarga = $model->id_datakeluarga; 
                                // echo $modelDataanak->id;
                                // echo $modelDataanak->id_datakeluarga;
                                // die();

                                if (! ($flag = $modelDataanak->save(false))) {
                                    $transaction->rollBack();
                                    break;
                                }
                                
                            }
                        
                        if ($flag) {
                            $transaction->commit();
                            //die();
                            return $this->redirect(['site/index']);
                        }
                    } catch (Exception $e) {
                        //die();
                        $transaction->rollBack();
                    }
                    //die();
                }
                   //if (Yii::$app->getUser()->login($user)) {
                // die();
                    return $this->goHome();
                //}
            }
        }
        
        return $this->render('register',[
        'model' => $model,
        'models1Dataanak' => (empty($models1Dataanak)) ? [new Dataanak] : $models1Dataanak,
        ]);
    }
}
