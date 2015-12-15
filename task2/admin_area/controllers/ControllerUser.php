<?php

include_once __DIR__ . '/../models/UserModel.php';
include_once __DIR__ . '/../classes/View.php';
include_once __DIR__ . '/../models/OrdersModel.php';
include_once __DIR__ . '/../models/OrdersProModel.php';

 class ControllerUser
 {
  public function actionAll ()
   {
      
       $pro = UserModel::findALL();
       $ord = OrdersModel::findAll();
       $ordpro = OrdersProModel::findAll();
       $view = new  View();
       $view->items = $pro;
       $view->orders = $ord;
       $view->ords = $ordpro;
      echo $view->display ("order.php");
   
   }
   
   public function actionOne ()
   {
    $id = $_GET['add_cart'];
    $user = UserModel::findUsersOne($id);
    $item = ProModel::findOne($id);
     
    $view = new View();
    $view->users = $user;
    $view->items = $item;
 
    
    echo $view->display ("/cart.php");

   }
      
  public function actionInsert ()
   {
    
 /*    if(isset($_POST['sub'])){    
      $user = new UserModel();
      
      $user->first_name = $_POST['fn'];
      $user->last_name = $_POST['ln'];
       
      $user->email= $_POST['em'];
      $user->save();
       
       
      $ord = new OrdersModel();
      
      $ord->user_id =$_POST['id'];
      $ord->sum = $_POST['price'];
      $ord->order_date= date("Y/m/d h:i:s");
      $ord->save();
      
      
      
      $ordPro = new OrdersProModel();
      $ordPro->order_id =$_POST['id'];
      $ordPro->product_id = $_POST['id'];
      $ordPro->qty= $_POST['quantity'];
      $ordPro->save();
      
      header('Location: http://localhost/task/task2/admin_area/index.php');
      //exit;

        
     }*/
  
   }
   

    
 }
 
 //$a->actionInsert ();

 