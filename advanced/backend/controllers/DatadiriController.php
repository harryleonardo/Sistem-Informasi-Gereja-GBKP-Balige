<?php

namespace backend\controllers;

use Yii;
use backend\models\Datadiri;
use backend\models\Dataanak;
use backend\models\Datagereja;
use backend\models\Model; 
use backend\models\DatadiriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\RegistrationForm;
use yii\data\ActiveDataProvider;
use yii\data\Sort;
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_datadiri]);
        } else {
            return $this->render('create', [
                'model' => $model,
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
                            Yii::$app->session->setFlash('success', 'Data telah berhasil ditambahkan');
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


    // Action List Jemaat
    public function actionListjemaat(){
        $dataProvider = new ActiveDataProvider([
            'query' => Datadiri::find(),
            'pagination' => [
                'pageSize' => 10,
            ],

            //Sorting
                'sort' => [
                    'defaultOrder' => [
                    'sektor' => SORT_ASC, 
        ]
    ],
        ]);

        return $this->render('listjemaat', [
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionUpdateregister($id)
    {
        $model = new RegistrationForm();
        $models = $this->findModelupdateregister($id);
        // $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_datadiri]);
        } else {
            return $this->render('updateregister', [
                'model' => $model,
            ]);
        }
    }

    protected function findModelupdateregister($id)
    {
        if (($model = Dataanak::findOne($id)) !== null) {
            if(($datagereja = Datagereja::find()->where(['id_datadiri'=>$id]))){
                return $model;
            }
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
