<?php
	error_reporting(E_ALL);
	if($_REQUEST['type']=='sendUsEmail'){

		echo 'yes';
	}


	if($_REQUEST['type']== 'checkEmail'){

		$email="shakir@gmail.com";
		if(trim($_REQUEST['email']) == $email){
			//$data= ['code' => success, 'message' => 'Email already taken, try another'];
			echo 'Email already taken, try another';
		}
	}
?>
