<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(empty($_SESSION['token'])){
            $this->display('Login/login');
            return false;
        } if(empty($_SESSION['user'])){
            $this->display('Login/login');
        }
        $user = $_SESSION['user'];

        $res = M('user')->where(array('user'=>$user))->find();

        $term = M('term_num')->limit(3)->order('createtime desc')->select();
        $term_all = M('term_num')->select();
        $bets = M('bets')->where(array('u_id'=>$user))->select();
        $num_m = M('bets')->sum('num_m');
        $loss = M('bets')->sum('loss');
        $prize = M('bets')->count('prize');
        $status = M('bets')->count('status');
        $backwater = M('bets')->sum('backwater');
        if(empty($num_m)){
            $num_m=0;
        } if(empty($loss)){
            $loss=0;
        } if(empty($prize)){
            $prize=0;
        } if(empty($status)){
            $status=0;
        } if(empty($backwater)){
            $backwater=0;
        }
       // print_r($num_m);exit;
        if(empty($res)){
            return '出错啦！';
        }if(empty($term)){
            return '出错啦！';
        }
        $this->assign('num_m',$num_m);
        $this->assign('loss',$loss);
        $this->assign('prize',$prize);
        $this->assign('status',$status);
        $this->assign('backwater',$backwater);

        $this->assign('bets',$bets);
        $this->assign('user',$res);
        $this->assign('term_all',$term_all);
        $this->assign('term',$term);
        $this->assign('term_number',$term[0]['term_number']);
        if($res['token'] != $_SESSION['token']){
            $this->display('Login/login');
            return false;
        }else{
            $this->display();
        }

       // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function memders(){
        //$token = 'user_'.rand(00000000,99999999);
       // print_r($token);exit;
        $this->display();
    }
    public function top(){

        $this->display();
    }

    public function updete_pwd(){
        $data = $_POST;
        if(empty($data)){
            $code = 2;
            $this->ajaxReturn($code);
        }
        $where = array(
            'user'=>$_SESSION['user']
        );
        $user =M('user')->where($where)->save(array('pwd'=>$data['newpassword2']));
        if($user == false){
            $code = 3;
            $this->ajaxReturn($code);
        }
        $code = 1;
        $this->ajaxReturn($code);
    }
    public function bets(){
        $data = $_POST;
        if(empty($data)){
            $code = 2;
            $this->ajaxReturn($code);
        }
        if(empty($_SESSION['user'])){
            $code = 3;
            $this->ajaxReturn($code);
        }
        $term_num = '141'.substr(0,-5,time());
        $where = array(
            'u_id' =>$_SESSION['user'],
            'num'=>$data['num'],
            'num_m'=>$data['num_m'],
            'term_num'=>$term_num,
            't_num'=>$data['term_num'],
            'createtime'=>time(),
            'status'=>1,
            'odds'=>9870,
            'color_species'=>'排列5',
        );

        $bets = M('bets')->add($where);
        $user = M('user')->where(array('user'=>$_SESSION['user']))->find();
       // $this->ajaxReturn($user);
        if(empty($user)){
            $code = 4;
            $this->ajaxReturn($code);
        }
        $credit = $user['available_credit'] - $data['num_m'];
        $use = $data['num_m']+$user['use_credit'];
      //  $this->ajaxReturn($use);
        $user = M('user')->where(array('user'=>$_SESSION['user']))->save(array('use_credit'=>$use,'available_credit'=>$credit));
        if($user != 1){
            $code = 5;
            $this->ajaxReturn($code);
        }
        if($bets != 1){
            $code = 6;
            $this->ajaxReturn($code);
        }
//        $bets_info = M('bets')->where(array('term_num'=>$term_num,))->find();
//        if(empty($bets_info)){
//            $code = 2;
//            $this->ajaxReturn($code);
//        }
        $this->ajaxReturn($bets);
    }

}

