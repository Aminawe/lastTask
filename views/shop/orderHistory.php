<?php

use yii\helpers\Url;

?>

<div class="page-header">
<h2 align="center"> Order Products History <h2>
</div>
<div class="container">
<table class="table table-condensed" border="5">
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Order ID</th>
        
    </tr>

    <?php foreach($orderProducts as $field){ ?>
    
    <tr>
        <td><?= $field->productName; ?></td>
        <td><?= $field->quantity; ?></td>
        <td><?= $field->orderId; ?></td>
      
   	
    </tr>

    <?php } ?>

</table>
</div>