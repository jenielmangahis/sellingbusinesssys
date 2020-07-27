<?php
use Cake\Core\Configure;
require_once(ROOT . DS .  'vendor' . DS . 'dompdf' . DS . 'dompdf_config.inc.php');
$dompdf = new DOMPDF();
$dompdf->load_html(utf8_decode($this->fetch('content')), Configure::read('App.encoding'));
if( isset($landscape) ){
	$dompdf->set_paper('letter', 'landscape');
}
$dompdf->render();
//debug($dompdf->output());
echo $dompdf->output();
?>