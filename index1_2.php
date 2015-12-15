<?php 
require_once __DIR__ . '/task1_2.php';
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="task.css" >

</head>
<body>
<div id = "f">
<?php 

if($code) echo $code;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="text" name="count"  ><br>
<select name = "num">

<option  value="1">Թվեր</option>
<option  value ="2">Տառեր</option>
<option value ="3">Թվեր և Տառեր</option>

</select>
<br>
<input type="submit" value="գեներացնել" name = "sub">
</form>
</div>
</body>
</html>

