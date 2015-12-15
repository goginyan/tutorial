<!DOCTYPE html>
<html lang="en">
<head>
  <title>Orders</title>
 <meta charset="utf-8">
   
 <link rel="stylesheet" type="text/css" href="css/task2.css" >


</head>
<body>

<table id="customers">
<tr>
  <th>հ/հ</th>
  <th>Անուն</th>
  <th>Ազգանուն</th>
  <th>Կայքի Հասցե․</th>
  <th>Ընդհանուր Գումարը</th>
  <th>Պտվիրման Ամսաթիվը</th>
  <th>Ապրանքի Քանակը</th>
  
</tr>
 <?php foreach ($items as $pro): ?>
  <?php foreach ($orders as $ord): ?>
   <?php foreach ($ords as $ordpro): ?>
<tr>
<td><?php echo $pro->user_id; ?></td>
<td><?php echo $pro->first_name; ?></td>
<td><?php echo $pro->last_name; ?></td>
<td><?php echo $pro->email; ?></td>
<td><?php echo $ord->sum; ?></td>
<td><?php echo $ord->order_date; ?></td>
<td><?php echo $ordpro->qty; ?></td>
</tr>

 <?php endforeach; ?>
 <?php endforeach; ?>
 <?php endforeach; ?>

</table><br>
</body>
</html>

