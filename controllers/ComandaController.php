<?php

namespace app\controllers;

use Yii;
use app\models\Comanda;
use app\models\ComandaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ComandaController implements the CRUD actions for Comanda model.
 */
class ComandaController extends Controller
{

    public $layout = 'admin';

    /**
     * @inheritdoc
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
     * Lists all Comanda models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComandaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Comanda model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionFoto($id)
    {

        $model = $this->findModel($id);
        $model2 = new UploadForm();

        //ar_dump($model);exit();

        if (Yii::$app->request->isPost) {
            $model2->imageFile = UploadedFile::getInstance($model2, 'imageFile');
            if ($model2->upload()) {
                $id = $model->id;
                $comanda = Comanda::find()->where(['id'=>$id])->one();
                $comanda['image'] = $model2->imageFile->name;
                $comanda->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('foto', [
                'model' => $model,
                'model2' => $model2,
            ]);
        }

    }

    /**
     * Creates a new Comanda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Comanda();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Comanda model.
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
     * Deletes an existing Comanda model.
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
     * Finds the Comanda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Comanda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Comanda::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
