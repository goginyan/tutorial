<!DOCTYPE html>
<html lang="en-US">
<head>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<title>Productes</title>
<meta charset="utf-8">
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

<link rel="stylesheet" type="text/css" href="css/style.css" madia="all">

</head>
<body>
<div id="registration-form">
	<div class='fieldset'>
    <legend>Insert New Product</legend>
     <form action= "index.php?ctrl=Pro&act=Insert" method= "post" enctype="multipart/form-data">
    
			<div class='row'>
				<label for='name'>Product Title:</label>
                                <input type="text" name="product_name"  required />
			</div>
			<div class='row'>
				<label for='firstname'>Product Image:</label>
                                <input type="file" name="product_image" required>
			</div>
			<div class='row'>
				<label for='firstname'>Product Price:</label>
                                <input type="text" name="product_price"required >
			</div> 
			<div class='row'>
				<label for='firstname'>Product Description:</label>
                                <textarea name="product_desc" cols="20" rows="10" ></textarea>
			</div>
                        </div>
                       <input type="submit" name="submit" value="Insert Procuct">
		</form>
	</div>



</body>
</html>
