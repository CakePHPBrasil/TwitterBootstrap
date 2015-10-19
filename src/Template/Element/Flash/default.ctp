<?php
$class = 'alert alert-';
if (!empty($params['class'])) {
	if ($params['class'] == 'error') {
    	$class .= '-danger';
	} else if (
		$params['class'] == 'success'
		or $params['class'] == 'info'
		or $params['class'] == 'danger'
		or $params['class'] == 'warning') {
		$class .= '-info'.$params['class'];
	} else {
		$class .= 'info';
	}
} else {
	$class .= 'info';
}
?>
<div class="<?= h($class) ?>" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?= h($message) ?></div>
