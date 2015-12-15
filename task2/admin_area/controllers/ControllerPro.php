<?php

include_once __DIR__ . '/../models/ProModel.php';
include_once __DIR__ . '/../classes/View.php';
include_once __DIR__ . '/../models/UserModel.php';
include_once __DIR__ . '/../models/OrdersModel.php';
include_once __DIR__ . '/../models/OrdersProModel.php';


 class ControllerPro
 {
  public function actionAll ()
   {
      
       $pro = ProModel::findALL();
       
       $view = new  View();
       $view->items = $pro;
      
       echo $view->display ("all.php");
   
   }
   
   public function actionOne ()
   {
    $id = $_GET['add_cart'];
    $item = ProModel::findOne($id);
    
    $view = new View();
    $view->items = $item;
    
    
    echo $view->display ("/cart.php");

   }
      
  public function actionInsert ()
   {
     if(isset($_POST['submit']) &&  $_POST['submit'] == 'Insert Procuct'){    
      $pro = new ProModel();
      
      $pro->name = $_POST['product_name'];
      $pro->description = $_POST['product_desc'];
      
      $product_image= $_FILES['product_image']['name'];
      $product_image_tmp= $_FILES['product_image']['tmp_name'];

      move_uploaded_file( $product_image_tmp, "img/$product_image");
      
      $pro->image = $product_image;
      
      $pro->price= $_POST['product_price'];
      $pro->save();
     header('Location: http://localhost/task/task2/admin_area/index.php');
     exit;

     }
   if(isset($_POST['sub'])){
      
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
      exit;

        
     }

  
   }
   

    
 }
 


 