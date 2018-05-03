<?php
namespace Home\Controller;
use Think\Controller;
use Think\Template\Driver\Mobile;
use PDO;

class LoginController extends Controller {
    public static function isSupported()
    {
        return in_array('mysql', PDO::getAvailableDrivers()); //Comment this line
        return class_exists('PDO') && in_array('mysql', PDO::getAvailableDrivers()); //add this line
    }

   public function login(){

        $this->display();
    }
    public function seccode(){
       $data = $_POST;
        if(empty($data)){
            $code = 2;
            $this->ajaxReturn($code);
        }
        //$user = new Mobile();
//        $dd = array(
//            'term_number'=>10083,
//            'createtime'=>time(),
//        );
//        $user_info = M('term_num')->add($dd);
//        print_r($user_info);exit;
        $where = array(
            'user'=>$data['user'],
            'pwd'=>$data['pwd'],
        );

        $user_info = M('user')->where($where)->find();

        if(empty($user_info)){
             $code = 3;
            $this->ajaxReturn($code);
        }
        $token = 'user_'.rand(00000000,99999999);
        $res = M('user')->where(array('user'=>$user_info['user']))->save(array('token'=>$token));
        if($res==1){
            $_SESSION['token'] = $token;
        }else{
            $code =4;
            $this->ajaxReturn($res);
        }
       // print_r($user_info);exit;
        $_SESSION['user']=$user_info['user'];
        $code = 1;
        $this->ajaxReturn($code);
        //print_r($user_info);exit;

    }
    public function info(){
        $this->display();
    }

}

