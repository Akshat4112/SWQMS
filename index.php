<?php
require_once 'core/init.php';

$user= DB::getInstance("SELECT username FROM users WHERE  username = ?",array('alex'));
if($user->error()){
	echo 'No user';
}else{
	echo 'OK';
}

