
<?php

use yii\helpers\Url;

?>

<div class="page-header">
<h2 align="center"> Order History <h2>
</div>
<div class="container">
<table class="table table-condensed" border="5">
    <tr>
        <th>Order Title</th>
        <th>Employee ID</th>
        <th>Total Price</th>
        
    </tr>

    <?php foreach($model as $field){ ?>
    
    <tr>
        <td><?= $field->title; ?></td>
        <td><?= $field->employee_id; ?></td>
        <td><?= $field->total_price; ?></td>
      
   	
    </tr>

    <?php } ?>

</table>
</div>