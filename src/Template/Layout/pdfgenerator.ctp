<?php
	use Cake\Core\Configure;
	require_once(ROOT . DS .  'vendor' . DS . 'dompdf' . DS . 'dompdf_config.inc.php');
	$dompdf = new DOMPDF();
	$dompdf->load_html(utf8_decode($this->fetch('content')), Configure::read('App.encoding'));
	$dompdf->render();
	$path = WWW_ROOT . 'files/pdf/';
	$filename = 'candidate_' . $candidates->user->first_name . '_' . $candidates->user->last_name . '.pdf';	
	file_put_contents($path . $filename, $dompdf->output());
?>
