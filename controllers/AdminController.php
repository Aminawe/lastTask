<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Form;
use app\models\Comment;
use app\controllers\Response;
use yii\ActiveRecord;


class AdminController extends Controller
{

    public function actionTest(){
         return $this->render('form');

    }
    public function actionTestAjax(){

        
        $formModel=new Form();
        $formModel->firstName=$_POST['firstN'];
        $formModel->secondName=$_POST['secondN'];
        $formModel->save();

        echo "Welcome ".$_POST['firstN'];
        
        // $data = json_decode($json);
        
}
        

    // if (Yii::$app->request->isAjax) {
    //     // do your data processing here
    //     exit();
    //     $formModel=new Form();
    //     $formModel->firstName=$_POST('firstN');
    //     $formModel->secondName=$_POST('lastN');
    //     $formModel->save();

    // }
    // else{
    //     return $this->render('form');

    // }


    // public function actionShowForm(){
    //     //Yii::$app->response->format = Response::FORMAT_JSON;
            
    //     if(Yii::$app->request->isAjax){
    //         exit();
        
    //         $formModel=new Form();
    //         $formModel->firstName=$_POST('firstN');
    //         $formModel->secondName=$_POST('lastN');
    //         $formModel->save();
            
    //     }
        

    //     else{
    //         return $this->render('form');
    //     }

    // }






    public function actionAdd(){

    	
    if(Yii::$app->request->post()){


    	$model = new User();

        $model->first_name=$_POST["first_name"];
        $model->last_name=$_POST["last_name"];
    	$model->password=$_POST["password"];
    	$model->email=$_POST["email"];
    	
    	$model->save();

        return $this->redirect('add');

    	      
        }else{

        	return $this->render('add');

        }
 
        

    }


    public function actionRead()
    {
    
        $model = User::find()->all();
        return $this->render('read', ['model' => $model]);
    
    }


    public function actionEdit()
    {
        if(Yii::$app->request->get()){

        $id = $_GET["id"];
        $model = User::find()->where(['id' => $id])->one();
        return $this->render('edit', ['model' => $model]);
    }


        if(Yii::$app->request->post()){

            $id=$_POST['id'];

            $model = User::find()->where(['id' => $id])->one();

            $model->first_name=$_POST["first_name"];
            $model->last_name=$_POST["last_name"];
            $model->password=$_POST["password"];
            $model->email=$_POST["email"];
        

            $model->save();

            return $this->redirect('read');



        }

        
        
    }




    public function actionDelete()
    {
     	if(Yii::$app->request->get()){

            $id = $_GET["id"];

        	$model = User::find()->where(['id'=>$id])->one();
         
        
        	if($model === null)
            	throw new NotFoundHttpException('The requested page does not exist.');
            

       
        	$model->delete();
    	}

        return $this->redirect(['read']);
    } 

}


