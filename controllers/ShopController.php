<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Product;
use app\models\Employee;
use app\models\OrderProducts;
use app\models\Orders;
use yii\ActiveRecord;
use yii\base\Exception;


class ShopController extends Controller
{



    public function actionOrder(){
        if(Yii::$app->request->post()){
        
        /// order save
        /// products loop save >> 
        
        $transaction = Yii::$app->db->beginTransaction();
        try{

        $productName=$_POST['sel'];
        $productQuantity=$_POST['quan'];
        $productPrice=array();
        $totalOrderPrice=0.0;
        $counter=0;
        $counter1=0;
     

        foreach ($productName as $key) {
                
                 $product = Product::find()
                 ->where(['id' => $key])
                 ->one();

                 $productPrice[]+=$product->price;    
                 }


        foreach($productQuantity as $key1){

                $totalOrderPrice+=$key1*$productPrice[$counter];

                $counter=$counter+1;

            }


        $order=new Orders();
        $order->title=$_POST['title'];
        $order->employee_id=$_POST['employee_id'];
        $order->total_price=$totalOrderPrice; 
        $order->save();
        
        
        
        foreach ($productQuantity as $key2) {
            $orderProducts=new OrderProducts();
            $product = Product::find()
                 ->where(['id' => $productName[$counter1]])
                 ->one();


            $orderProducts->productName=$product->name;
            $orderProducts->quantity=$key2;
            $orderProducts->orderId=$order->id;
            
            $orderProducts->save();
            
            $counter1=$counter1+1;
        
            
        }
        



        $transaction->commit();

        }catch(Exception $ex){
                $transaction->rollBack();
            }

            
            
            return $this->render('thanks');

    

        }


        $employee=Employee::find()->all();

        $product=Product::find()->all();

        return $this->render('order',['product' => $product, 'employee' => $employee]);

    }


    public function actionOrderHistory(){

        $orderProducts=OrderProducts::find()->all();

        return $this->render('orderHistory', ['orderProducts' => $orderProducts]);



    }

    public function actionRead()

    {
    
        $model = Orders::find()->all();
        return $this->render('read', ['model' => $model]);
    
    }





}


