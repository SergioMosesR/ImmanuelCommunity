<?php
require '../config/fungsi.php';

$paramResult = checkParamId('id');
if(is_numeric($paramResult)){

    $userId = validate($paramResult);
    $user   = getById('users', $userId);
    if($user['status'] == 200){

        $userDeleteRes  = deleteQuery('users',$userId);
        if($userDeleteRes){

            redirect('users.php','Berhasil Menghapus Data Pengguna');
        }else{
            redirect('users.php','Terjadi Sesuatu');
        }

    }else{
        redirect('users.php',$user['message']);
    }

}else{
    redirect('users.php',$paramResult);
}
?>