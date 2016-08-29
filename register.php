<?php
$leibie=$_POST['leibie'];
$major=$_POST['major'];
$username=$_POST['username'];
$sex=$_POST['sex'];
$xueli=$_POST['xueli'];
$IDNO=$_POST['IDNO'];
$prov=$_POST['prov'];
$city=$_POST['city'];
$QQ=$_POST['QQ'];
$mobile=$_POST['mobile'];
$content=$_POST['content'];
$sname=$_POST['sname'];
$come=$_POST['come'];
$time=time();
$g = "/^1[34578]{1}\d{9}$/";
if($major==''){
    echo "请填写您的报考专业";
}elseif($username==''){
    echo "请填写您的姓名";
}
elseif(!preg_match($g,$mobile)){
    echo "请输入正确的手机号码";
}else{
    $mydb=new mysqli('localhost','root','goatgoat','school');
    $sql="insert into zikao (leibie,major,username,sex,xueli,IDNO,prov,city,QQ,mobile,content,sname,time,come) values ('{$leibie}','{$major}','{$username}','{$sex}','{$xueli}','{$IDNO}','{$prov}','{$city}','{$QQ}','{$mobile}','{$content}','{$sname}','{$time}','{$come}')";
    $mydb->query("SET NAMES 'utf8'");
    $re=$mydb->query($sql);
    if($re){
        echo "恭喜您报名成功,请您保持手机畅通，稍后我们会有专业老师给您提供详细的咨询信息";
    }else{
        echo "数据库崩溃了，请稍后再试";
    }

}
