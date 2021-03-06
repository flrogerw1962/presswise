<?php

/**
 * Constants Used Throughout the Application
 * -AWS Credentials
 * -SMTP Credentials/Settings
 * -Fotobar Database Credentials
 * -Presswise Database Credentials
 * -Presswise API Credentials
 * -PQM Settings
 *
 * @package Presswise
 * @subpackage Utilities
 * @author gWilli
 * @version 1.0
 * @name Constants
 * @copyright 2015
 */


ini_set('display_errors',0);
error_reporting(E_ALL);
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

$constants = array(

		// AWS Information
		'AWS_KEY' => 'XXXXXXXXXXXXXXXXXXXXXXX',
		'AWS_SECRET' => 'XXXXXXXXXXXXXXXXXX',
		'AWS_CACHE' => 'apc',
		'RS_KEY' => 'Jon Smith',
		'RS_SECRET' => 'XXXXXXXXXXXXXXXXXXXXXXX',
		'RS_REGION' => 'IAD',

		// Alert Email Information
		'ALERT_EMAIL' => 'rogerwilliams1962@hotmail.com,david.fantin@successories.com',
		'SMTP_HOST' => 'mailrelay.XXXXXXXX.com',
		'SMTP_PORT' => 25,
		'SMTP_USER' => 'XXXXXXXXXXXXX',
		'SMTP_AUTH' => 'XXXXXXXXXX',

		// Fotobar DB Information
		'FOTOBAR_DB_USER' => 'presswise',
		'FOTOBAR_DB_AUTH' => 'd7sWxtrd3xTyxGa6',
		'FOTOBAR_DB_HOST' => 'localhost',
		'FOTOBAR_DB_NAME' => 'presswise',

		// Presswise DB Information
		'PRESSWISE_DB_USER' => 'odbc',
		'PRESSWISE_DB_AUTH' => 'dJHKXEZbzLrPvVKq',
		'PRESSWISE_DB_HOST' => '192.64.78.50',
		'PRESSWISE_DB_NAME' => 'presswise_order',

		// Presswise API Information
		'PRESSWISE_ENDPOINT' => 'http://successories.mypresswise.com/r/wsdl-order2.php',
		'PRESSWISE_USER' => 'soapuser',
		'PRESSWISE_PASS' => '7x36mg!4m06Ar14u',
		'PRESSWISE_CODE' => '747AEE51C0A97840',

		// PQM INFORMATION
		//'PQM_BUCKET' => 'pqm.polaroidfotobar.dev',
		//'PQM_PRESSWISE_BUCKET' => 'presswise.polaroidfotobar.dev',
		'PQM_CONTAINER' => 'pqm.polaroidfotobar.dev',
		'PQM_PRESSWISE_CONTAINER' => 'presswise.polaroidfotobar.dev',
		
		'PQM_DOWNLOAD_DIR' => '/tmp/unzip',
		'PQM_FINAL_DIR' => '/tmp/done',
		
		// Page Count Information
		'PDF_TMP_DIR' => '/tmp',
		'PDF_CURRENT_PDF' => 'current.pdf'
);

foreach($constants as $key=>$value)
{
	defined($key) || define($key, $value);

}
?>
