<?php 
require_once('lib/nusoap.php');
require ('Book.php');

$server = new SoapServer("server-soapui-project.wsdl"); 

$server->setClass('Book');
$server->addFunction('getInfo');

$server->register('getInfo',
      array('name' => 'xsd:string', 'op' => 'xsd:string'),  
      array('result' => 'xsd:int')
      );

$server->handle();
?>