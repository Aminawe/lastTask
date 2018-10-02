<?php 

use yii\helpers\Url;

?>

 
<form action="<?= Url::to(['admin/add']); ?> " method="post">
	FirstName<input type="text" name="first_name">
	LastName<input type="text" name="last_name">
	Password<input type="text" name="password">
	Email<input type="text" name="email">
    Submit<input type="submit" value="submit">
</form>

