<?php 

$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<xml>
	<ToUserName><![CDATA[toUser]]></ToUserName>
	<FromUserName><![CDATA[FromUser]]></FromUserName>
	<CreateTime>123456789</CreateTime>
	<MsgType><![CDATA[event]]></MsgType>
	<Event><![CDATA[subscribe]]></Event>
</xml>
XML;


 $smXML = (array) simplexml_load_string($xmlstr,'SimpleXMLElement', LIBXML_NOCDATA);
 // $data = $smXML -> movies;
 // $data = (array) simplexml_load_string($xmlstr);
 var_dump($smXML);
 // echo '<pre>';
 // var_dump($smXML->movie->plot);
 // echo '</pre>';
 exit;