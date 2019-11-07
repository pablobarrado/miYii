<?php

class CategoriawebController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $pageCaption = "My Web con Yii y bootstrap - Página de Categorías";
    public $pageDescription = "Apendiendo a utilizar Yii y bootstrap - Sección de Categorías";
    public $layout = '//layouts/column2';

    /**
     * Funcionalidades que se van a ejecutar 
     * se pueden crear filtros personalizados
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view','enviarArchivo'),
                'users' => array('*'),
                //'ips'=> array("127.0.0.1"),
                //'verds'=>array("PUT"), //post o y  get delete                
                //'roles' => array("admin"),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        Yii::app()->user->setFlash("Error", "Prueba de error");
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Categoriaweb;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Categoriaweb'])) {
            $model->attributes = $_POST['Categoriaweb'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_ca));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Categoriaweb'])) {
            $model->attributes = $_POST['Categoriaweb'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_ca));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        // include 
        // Par Alias 
        // NO hace falta poner php 
        // nombre de la clase igual que el nombre del archivo
        // Yii::import("application.Test");
        // Yii::import("ext.Test");
        // Podemos crear mi Alias 
       // Yii::app()->authManager->createRole("admin");
        // Yii::app()->authManager->assign("admin",1);
        
        
        echo "id es ".Yii::app()->user->id."<br>";
        
        if(Yii::app()->user->checkAccess("admin")){            
           echo "Dentro de check access <br>";            
        }
        
        if(Yii::app()->authManager->checkAccess("admin",1)){            
           echo "Dentro de check access <br>";            
        }
        
        Yii::import("me.Test");

        $mio = new Test();
        $mio->Hola();

        //   echo Yii::app()->nuevoComponent->hola();
        // $_post    
        $test = Yii::app()->request->getPost("test", "defalValue");
        // $_get
        $test2 = Yii::app()->request->getQuery("test", "defalValue");
        // $_post o $_get
        $test3 = Yii::app()->request->getParam("test", "defalValue");
        if (Yii::app()->request->isPostRequest) {            
           // Peticion con ajax             
        }
        if (Yii::app()->request->isAjaxRequest) { 
            // Peticion con ajax 
        
        echo "<br><br>";
        echo "baseUrl => ".Yii::app()->request->baseUrl . "<br>";
        echo "requestUri =>".Yii::app()->request->requestUri . "<br>";
        echo "pathInfo =>".Yii::app()->request->pathInfo . "<br>";
        echo "userAgent =>".Yii::app()->request->userAgent . "<br>";
        echo "acceptTypes =>".Yii::app()->request->acceptTypes . "<br>";        
        echo "queryString =>".Yii::app()->request->queryString . "<br>";
        echo "userHost =>".Yii::app()->request->userHost . "<br>";
        echo "userHostAddress =>".Yii::app()->request->userHostAddress . "<br>";
        }
        
        if(Yii::app()->user->isGuest)
        {
            echo "Es invitado<br>";
        }
        else {
            echo "Esta logueado<br>";
        }
        
        Yii::app()->user->getFlashes();
        
        
        
        Yii::app()->user->setState("My variable session","xyv");
        //Yii::app()->user->login(CUserIdentity,360);
        // Yii::app()->user->logout();
        
        //Yii::app()->end();
        
       // print_r(Yii::app()->user);
        
        // exportar a excel
        //Yii::app()->request->sendFile($fileName, $content) . "<br>";
        //  redirect con sctring
       // Yii::app()->request->redirect("http://localhost/yii/facilito/categoriaweb/");
        // redirec con controlador 
        // $this->redirect(array("/site/index","id"=>2));
        
        // 
        // 
        // Alias 
        // application // protected
        //  webroot // root 
        //  ext // protected/extensions
        //  zii // framework/zii
        // 
        //include (Yii::getPathOfAlias("application")."Test.php");

        Yii::app()->user->setFlash("Información", "Mensaje de Usuario");

        $dataProvider = new CActiveDataProvider('Categoriaweb');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        Yii::app()->user->setFlash("Error", "Prueba de error");
        $model = new Categoriaweb('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Categoriaweb']))
            $model->attributes = $_GET['Categoriaweb'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }
    
        /**
     * Manages all models.
     */
    public function actionenviarArchivo() {
        $fileName = "test.xls";
        $content = "<table><tr><td>Texto 1</td><td>Texto 2</td><td>Texto 3</td></tr></table>";        
        $content = $this->renderPartial("excel",array('model' => Categoriaweb::model()->findAll()), true);
        
        Yii::app()->request->sendFile($fileName, $content);
        $this->render('admin', array(
            'model' => $model,
        ));
    }
    

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Categoriaweb the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Categoriaweb::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Categoriaweb $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'categoriaweb-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * 
     * @param type $id
     */
    public function actionEnabled($id) {
        $model = CategoriawebController::mode()->findByPk($id);

        if ($model->status == 1) {
            $model->status = 0;
        } else {
            $model->status = 1;
        }
        $model->save();
        $this->redirect(array("index"));
    }

}
