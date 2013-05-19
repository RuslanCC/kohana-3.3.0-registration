<div class="row">
	<div class="span4">
		<? if (isset($message)) echo '<span class="label label-important">'.$message."</span><hr />"; ?>
		<form method="post" action="/account/forgot">
			<label>E-Mail адрес</label>
			<input type="email" name="email" value="<?=$email;?>" class="span3">
			</label>
			<input type="submit" value="Восстановить пароль" class="btn btn-primary">
			<div class="clearfix"></div>
		</form>
      </div>
</div>