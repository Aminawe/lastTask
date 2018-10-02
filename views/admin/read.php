<?php

use yii\helpers\Url;

?>


<table border="2">
    <tr>
        <th>first_name</th>
        <th>last_name</th>
        <th>password</th>
        <th>email</th>
    </tr>

    <?php foreach($model as $field){ ?>
    
    <tr>
        <td><?= $field->first_name; ?></td>
        <td><?= $field->last_name; ?></td>
        <td><?= $field->password; ?></td>
        <td><?= $field->email; ?></td>
        <td><a href="<?= Url::to(['admin/delete?id=']).$field->id; ?>"><button>Delete</button></a>  </td>
        <td><a href="<?= Url::to(['admin/edit?id=']).$field->id; ?>"><button>Edit</button></a>  </td>
    </tr>

    <?php } ?>

</table>





