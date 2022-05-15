<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function defa(){
        $this->display();
    }
    public function ajaxitemlist(){
        $data=M('item')->select();
        $this->ajaxReturn($data,'json');
    }
    public function index(){
        $this->datee =date("Y-m-d H:i",time());
        $item = I('item');
        $this->namee=cookie('name');
        if($item == null){
            $this->error('请输从课代表分享的链接进入',U('Index/additem'));
        }
       else if(cookie($item)){
            $this->success('您已经签过到了',U('Index/day').'?item='.$item);
        }
    else{
        $this->daee =date("Y-m-d",I('item'));
        if(date("Y-m-d",I('item'))!=date("Y-m-d",time()))
        {
            $this->error('考勤已结束，下次早点来吧！');
        }
        
    	$this->display();}
	}
	public function additem(){
	    $this->datee =date("Y-m-d H:i",time());
	    $this->display();
	}
	public function addHandle()
	{
	    
	    $time=time();
	    $name=I('name');
	    if($name==''){
	        $this->error('请输从正确的链接进入',U('Index/additem'));
	    }
	    $d = array(
                    'time' => $time,
                    'name' =>$name
                );
        M('item')->add($d);
        $this->success('创建成功',U('Index/ke').'?item=' . $time.'&name='.$name);
	}
	public function ke()
	{
	    $this->datee =date("Y-m-d",I('item'));
	    if(I('item')==''){
	        $this->error('请输从正确的链接进入',U('Index/additem'));
	    }
	    $this->id=I('item');
	    $this->name=I('name');
	    $this->display();
	}
    public function yzm()
    {
       
        $Verify =     new \Think\Verify();
        //对指定的变量参数赋值，调整验证码效果
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = true;
        $Verify->codeSet = '0123456789abc'; 
        //图片输出
        $Verify->entry();
    }
    public function loginHandle(){
        $verify = new \Think\Verify();
        $name = I('name');
        $code = I('code');
        $item = I('item');
        if($name == null){
            $this->error('请输入姓名');
        }
        if($item == null){
            $this->error('请输从课代表分享的链接进入');
        }
        if($data = M('people')->where(array('name' => $name))->find())
        {
            $user_id  = $data['id'];
            $name     = $data['name'];
            $date     = date("Y-m-d",time()); 
            $where    = array('people_id' => $user_id,'itemid'=>I('item'));
            $flag     = 0;
            if($data  = M('time')->where($where)->select()){
                for($i=0;$i<count($data);$i++){
                    if(date("Y-m-d",$data[$i]['endTime']) == $date){
                        $d = array(
                            'id'        => $data[$i]['id'],
                    'itemid' =>$item,
                            'endTime'   => time()
                        );
                        M('time')->save($d);
                        $flag = 1;
                    }
                }
            }
            if($flag == 0){
                $d = array(
                    'endTime' => time(),
                    'itemid' =>$item,
                    'people_id' => $user_id
                );
                M('time')->add($d);
            }
            cookie('name',$name,86400000);cookie($item,'1',86400);
            $this->success('恭喜，签到成功！认真学习吧！',U('Index/day').'?name=' . $name.'&item='.$item);
        }else{
            $this->error('抱歉，没找到该用户，确认下拼写吧！');
        }
        
        
    }

    public function day(){
        $this->name   = $_GET['name'];
        $itemidd = I('item');
        if($itemidd == null){
            $this->error('请从正确的链接进入');
        }
        $itemm = M('item')->where(array('time' => $itemidd))->find();
        $this->iteem = $itemm[name];
        $date         = date('Y-m-d',$itemidd);
        $people       = M('people')->select();
        for($i=0;$i<count($people);$i++){
            $where = array('people_id' => $people[$i]['id']);
            $data = M('time')->where($where)->select();
            $flag = 0;
            for($j=0;$j<count($data);$j++)
            {
                if(date("Y-m-d",$data[$j]['endTime']) == $date&&$data[$j]['itemid']==I('item')){
                    $people[$i]['endTime']   = date('H:i:s' ,$data[$j]['endTime']);
                $flag = 1;
                }
            }
            if($flag == 0){
                //$people[$i]['startTime'] = '没签到';
                $people[$i]['endTime']   = '本节暂未签到';
            }
        }
        $this->people = $people;
        $this->date   = $date;
        $this->display();
    }
    public function daylist(){
        $this->name   = $_GET['name'];
        $itemidd = I('item');
        if($itemidd == null){
            $this->error('请从正确的链接进入');
        }
        $itemm = M('item')->where(array('time' => $itemidd))->find();
        $this->iteem = $itemm[name];
        $date         = date('Y-m-d',$itemidd);
        $people       = M('people')->select();
        for($i=0;$i<count($people);$i++){
            $where = array('people_id' => $people[$i]['id']);
            $data = M('time')->where($where)->select();
            $flag = 0;
            for($j=0;$j<count($data);$j++)
            {
                if(date("Y-m-d",$data[$j]['endTime']) == $date&&$data[$j]['itemid']==I('item')){
                    $people[$i]['endTime']   = date('H:i:s' ,$data[$j]['endTime']);
                $flag = 1;
                }
            }
            if($flag == 0){
                //$people[$i]['startTime'] = '没签到';
                $people[$i]['endTime']   = '本节暂未签到';
            }
        }
        $this->people = $people;
        $this->date   = $date;
        $this->ajaxReturn($people,'json');
    }



}