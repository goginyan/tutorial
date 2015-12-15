
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tsk 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/plmin.js"></script>
     <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo"><img src="../site/images/log.jpg" width="285" height="115"></div>
        </div>   
            <div id="menu">
                
                <ul>
                    <li><a href="../all.php">Home Page</a></li>
                    <li><a href="insPro.php">Insert Product</a></li>
                </ul>
               
                 
            </div>

<div class="clear"></div>

   
                <div id="latestproject">
                    <h1>Our Products</h1>
           <?php foreach ($items as $pro): ?>
                 <div class="project">
                    <h3> <?php echo $pro->name; ?></h3> 
                    <img src="img/<?php echo $pro->image; ?>" width="240" height="200">
                    <div class="clear"></div>

                   
                   <p>Արժեքը&nbsp<?php echo $pro->price; ?>&nbsp$
                    
                    
                    <?php echo $pro->description; ?></p>
                   <form method="post" action="view/cart.php">
                    <input type='button' value='-' class='qtyminus' field='quantity' />
                    <input type='number' name='quantity' value='1' class='qty' />
                    <input type='button' value='+' class='qtyplus' field='quantity' />

                      <button type="submit" class="sub"  formmethod="post" formaction="index.php?ctrl=Pro&act=One&add_cart=<?php echo $pro->product_id; ?>">
                     պատվիրել</button>
                   </form>
                 </div>
                  <?php endforeach; ?>
                  </div>
        <div id="footer">
                <img src="../site/images/logos.jpg" width="285" width="115">
          </div>
     
    </body>
</html>

      

