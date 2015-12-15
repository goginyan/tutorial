<?php

include_once __DIR__ . '/../models/OrdersModel.php';
include_once __DIR__ . '/../classes/View.php';

 class ControllerOrders
 {
  public function actionAll ()
   {
      
       $ord = OrdersModel::findALL();
 
       $view = new  View();
       $view->items = $ord;
      echo $view->display ("order.php");
   
   }
   
   public function actionOne ()
   {
    $id = $_GET['add_cart'];
    $item = OrdersModel::findOne($id);
    $view = new View();
    $view->items = $item;
    
   echo $view->display ("/cart.php");

   }
      
  public function actionInsert ()
   {
    if(isset($_POST['sub'])){    
 
       
      $pro = new OrdersModel();
      
      $pro->user_id =1;
      $pro->sum = $_POST['price'];
      $pro->order_date= date("Y/m/d");
      $pro->save();
      header('Location: http://localhost/task/task2/admin_area/index.php');
     exit;

     }
  
   }
   

    
 }
 
 //$a->actionInsert ();

 