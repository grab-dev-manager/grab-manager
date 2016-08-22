<?php
$method = $_GET['method'];

function remove(){
	$array = array("statusCode"=>"200",
	"message"=>"server operates seccuss",
	"navTabId"=>"",
	"rel"=>"",
	"callbackType"=>"",
	"forwardUrl"=>"",
	"confirmMsg"=>"");
    echo json_encode($array);
	die;
}

remove();