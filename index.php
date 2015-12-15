<?php 
require_once __DIR__ . '/rand.php';
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="task.css" >

</head>
<body>

<table id="customers">

<tr>
  <th>հ/հ</th>
  <th>Զանգվածի Տարրեր</th>
<?php foreach ($a as $k=>$v): ?>
</tr><tr>
<td><?php echo ++$k; ?></td>
<td><?php echo $v; ?></td>
</tr>

<?php endforeach ?>


</table><br>

</body>
</html>

