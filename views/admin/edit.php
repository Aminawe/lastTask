<?php 

use yii\helpers\Url;

?>
 
<form action="<?= Url::to(['admin/edit']); ?> " method="post">
	FirstName<input type="text" name="first_name" value="<?=$model->first_name?>" >
	LastName<input type="text" name="last_name" value="<?=$model->last_name?>" >
	Password<input type="text" name="password" value="<?=$model->password?>" >
	Email<input type="text" name="email" value="<?=$model->email?>" >
	<input type="hidden" name="id" value="<?=$model->id?>">
    Submit<input type="submit" value="submit">
</form>


