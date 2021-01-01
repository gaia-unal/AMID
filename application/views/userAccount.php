<?php
//start session
session_start();
//load and initialize user class
include 'user.php';
$user = new User();
if(isset($_POST['resetSubmit'])){
	$fp_code = '';
	if(!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['fp_code'])){
		$fp_code = $_POST['fp_code'];
		//password and confirm password comparison
        if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Confirme que la contraseña debe coincidir con la contraseña.'; 
        }else{
			//check whether identity code exists in the database
            $prevCon['where'] = array('forgot_pass_identity' => $fp_code);
            $prevCon['return_type'] = 'single';
            $prevUser = $user->getRows($prevCon);
            if(!empty($prevUser)){
				//update data with new password
				$conditions = array(
					'forgot_pass_identity' => $fp_code
				);
				$data = array(
					'password' => md5($_POST['password'])
				);
				$update = $user->update($data, $conditions);
				if($update){
					$sessData['status']['type'] = 'success';
                    $sessData['status']['msg'] = 'La contraseña de su cuenta se ha restablecido correctamente. Inicia sesión con tu nueva contraseña.';
				}else{
					$sessData['status']['type'] = 'error';
					$sessData['status']['msg'] = 'Se produjo algún problema, por favor intente nuevamente.';
				}
            }else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'No tiene autorización para restablecer la nueva contraseña de esta cuenta.';
            }
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Todos los campos son obligatorios, complete todos los campos.'; 
    }
	//store reset password status into the session
    $_SESSION['sessData'] = $sessData;
    $redirectURL = ($sessData['status']['type'] == 'success')?'index.php':'resetPassword.php?fp_code='.$fp_code;
	//redirect to the login/reset pasword page
    header("Location:".$redirectURL);
}elseif(!empty($_REQUEST['logoutSubmit'])){
	//remove session data
    unset($_SESSION['sessData']);
    session_destroy();
	//store logout status into the ession
    $sessData['status']['type'] = 'success';
    $sessData['status']['msg'] = 'Has cerrado la sesión correctamente desde tu cuenta.';
    $_SESSION['sessData'] = $sessData;
	//redirect to the home page
    header("Location:index.php");
}else{
	//redirect to the home page
    header("Location:index.php");
}