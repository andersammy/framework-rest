<?php

require 'src/Factory.php';

/*
require 'src/pdf/Pdf.php';
$opdf = new Spatie\PdfToText\Pdf();
*/

try{
	$oRouter = Factory::loadClass('http','Router');
	$oRouter->handle();
	
} catch (Exception $e){
	echo '<pre>';
	print_r($e);
	echo '</pre>';
	die();
}

?>