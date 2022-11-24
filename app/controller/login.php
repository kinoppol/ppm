<?php
class login{
    function index(){
        $content=view('login/form',array('action_url'=>site_url('login/check')));
        return view('template/authen',array('content'=>$content));
    }

    function check(){
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        if(empty($username)||empty($password)){
            $_SESSION['err_message']='กรุณาระบุชื่อผู้ใช้และรหัสผ่าน';
            return redirect(site_url('login'));
        }else{
            $user=model('user');
            $data=array(
                'username'=>$username,
                'password'=>$password,
            );
            $u=$user->get_user($data);
            if(count($u)<1){
                $_SESSION['err_message']='ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
                return redirect(site_url('login'));
            }else{
                return redirect(site_url('main'));
            }
        }
    }
}