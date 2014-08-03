<?php
/**
 * View to display `yii-user` authentication errors
 * 
 * @var $errorCode error code from `yii-user` module UserIdentity class
 * @var $user current user model
 */

switch($errorCode)
{
	case UserIdentity::ERROR_STATUS_NOTACTIV:
	$error = HOAuthAction::t('must be activated! Check your email for details!');
	break;
	case UserIdentity::ERROR_STATUS_BAN:
	$error = HOAuthAction::t('is banned!');
	break;
}
?>

<br><br><br>
<div class="form">
	<div class="errorSummary">
            <p class="bg-danger"><b><?= HOAuthAction::t('Sorry, but your account') ?> <?php echo $error; ?>!</b></p>
            <p class="bg-danger">
			<?php
			echo CHtml::link(HOAuthAction::t('Return to main page'), '/') .
			' | ' .
			CHtml::link(HOAuthAction::t('Return to login page'), Yii::app()->getModule('user')->loginUrl);
			?>
		</p>
	</div>
</div>
