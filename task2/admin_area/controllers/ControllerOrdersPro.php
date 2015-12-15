<?php

include_once __DIR__ . '/../models/OrdersProModel.php';
include_once __DIR__ . '/../classes/View.php';

 class ControllerOrdersPro
 {
  public function actionAll ()
   {
      
       $pro = OrdersProModel::findALL();
 
       $view = new  View();
       $view->items = $pro;
      echo $view->display ("all.php");
   
   }
   
   public function actionOne ()
   {
    $id = $_GET['add_cart'];
    $item = OrdersProModel::findOne($id);
    $view = new View();
    $view->items = $item;
    
   echo $view->display ("/cart.php");

   }
      
  public function actionInsert ()
   {
     if(isset($_POST['submit']) &&  $_POST['submit'] == 'Insert Procuct'){    
      $pro = new OrdersProModel();
      
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
  
   }
   

    
 }
 
 //$a->actionInsert ();

 