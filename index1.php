<?php 
echo $_REQUEST;
if(isset($_REQUEST['hub_challenge'])){
	$challenge=$_REQUEST['hub_challenge'];
	$token=$_REQUEST['hub_verfiy_token'];	
}
if($token=="kalaiselvan_chat_bot_challenge_token"){
	echo $challenge;
}
?>
