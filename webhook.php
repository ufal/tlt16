<?php
	$res = array(
		'res'=>'nok',
	);

	if (@$_POST['payload']) {
		$pay = json_decode($_POST['payload']);
		if ($pay->ref == 'refs/heads/production') {
			$out = shell_exec( 'cd /usr/share/drupal7/legacy/tlt16/ && git reset --hard HEAD && git pull origin production 2>&1' );
			$res = array(
				'res'=>'ok',
				'out'=>$out
			);
		}
	}
	print_r($res);
